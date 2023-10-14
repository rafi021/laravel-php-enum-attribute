<?php

namespace App\Traits;

use App\Attributes\AttributeProperty;
use BadMethodCallException;
use Illuminate\Support\Str;
use ReflectionAttribute;
use ReflectionEnum;

/*
To detail the process:

* First, the magic method __call() allows us to intercept a call to a method that does not exist on our class. As there is
no description() method on our Enum, we will be able to intercept it and do what we want with it.

* The ReflectionEnum class allows us to retrieve all the information from our RoleEnum. We will be able to retrieve
the attributes of our Enum as follows:

* $reflection->getCase($this->name)->getAttributes(). $this->name

corresponds to the name of the Enum case.

* We will then filter the attributes to keep only those that match to our Description attribute with the
array_filtermethod. We use the constant AttributeProperty::ATTRIBUTE_PATH to retrieve the full path of our
Description attribute which is App\Attributes\Description.

* If we don’t find a corresponding attribute, we throw a BadMethodCallException to indicate that the method does not exist.

* If we find a matching attribute, we will instantiate it and call its get() method to retrieve the value we are interested in.
And that’s it, with the combination of the Trait and PHP attributes, we have given superpowers to our Enums.

*/


trait AttributableEnum
{
    /**
     * Call the given method on the enum case
     *
     */
    public function __call(string $method, array $arguments): mixed
    {
        // Get attributes of the enum case with reflection API
        $reflection = new ReflectionEnum(static::class);
        $attributes = $reflection->getCase($this->name)->getAttributes();

        // Check if attribute exists in our attributes list
        $filtered_attributes = array_filter($attributes, fn (ReflectionAttribute $attribute) => $attribute->getName() === AttributeProperty::ATTRIBUTE_PATH . Str::ucfirst($method));

        // If not, throw an exception
        if (empty($filtered_attributes)) {
            throw new BadMethodCallException(sprintf('Call to undefined method %s::%s()', static::class, $method));
        }

        return array_shift($filtered_attributes)->newInstance()->get();
    }
}
