function isPrime (n)
{
    if (n < 2) return false;

    /**
     * An integer is prime if it is not divisible by any prime less than or equal to its square root
     **/

    var q =  Math.sqrt (n);

    for (var i = 2; i <= q; i++)
    {
        if (n % i == 0)
        {
            return true;
        }
    }

    return false;
}

isPrime(7);