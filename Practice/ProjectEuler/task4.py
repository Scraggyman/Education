def find_polindrome(digit=3):
    """Find the largest palindrome made from the product of two 3-digit numbers."""
    return None





lst = {}
answer = {}
for i in range(100, 1000):
    for j in range(100, 1000):
        lst[(i, j)] = i*j
for key, value in lst.items():

    try:
        value = str(value)
    except:
        print("Something wrong")
    if len(value) % 2 == 0:
        if value[0] == value[-1]:
            if value[1] == value[-2]:
                if value[2] == value[-3]:
                    answer[key] = value
    else:
        pass
print(answer)
