def largest_prime_factor(n=600851475143):
    """The prime factors of 13195 are 5, 7, 13 and 29.
    What is the largest prime factor of the number 600851475143 ?"""
    list_of_dividers = []
    for i in range(1, n+1):
        if n % i == 0:
            list_of_dividers.append(i)
        else:
            pass

print(largest_prime_factor())
