---
category_name: medium
problem_code: KOL16E
problem_name: 'Divide Me Please'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '2'
source_sizelimit: '40000'
problem_author: kol_adm
problem_tester: null
date_added: 21-12-2016
tags:
    - kol_adm
time:
    view_start_date: 1482831600
    submit_start_date: 1482831600
    visible_start_date: 1482831600
    end_date: 1735669800
    current: 1493557725
layout: problem
---
All submissions for this problem are available.There are some short-cut ways to check divisibility of numbers in base 10. Here are some examples:

1. Remember divisibility testing of 3 in base 10? It was simple, right? We need to add all the digits and then check if it is divisible by 3. Call this method **"1-sum"**.
2. In case of testing of 11, we need to add all digits by alternating their signs. For example, 1354379988104 = 11\*123125453464 and (4-0+1-8+8-9+9-7+3-4+5-3+1) = 0, which is divisible by 11 (0 = 0\*11). Lets call this method **"1-altersum"**.
3. In case of 7, we need to add all 3-digit-groups by alternating their signs. For example, **8**618**727**529**993** = 7\*1231246789999 and (**993**-529+**727**-618+**8**) = 581, which is divisible by 7 (581 = 7\*83). Similarly, we call this method **"3-altersum"**.
4. In similar Manner, 13’s checking is **"3-altersum"**.

In this problem, we are interested to see divisibility checking of **only** prime numbers in base 10. For a prime **P**, you need to find the smallest positive integer **N** such that **P’s divisibility testing** is **"N-sum"** or **"N-altersum"**.

### Input

At first you will be given **T (T ≤ 1000)**, the number of test cases. Then **T** lines will follow. In each line there will be single integer **P (P ≤ 231-1 = 2147483647)**, the prime number (**P** is a prime number **NOT** equal to **2** or **5**).

### Output

For each line of input, produce exactly one line of output like either "Case <test-case>: <N>-sum" or "Case <test-case>: <N>-altersum". Please see sample input and output for details.

### Sample

 ```
<b>Input</b>
<p>4
3
7
11
13</p>
<b>Output</b>
<p>Case 1: 1-sum
Case 2: 3-altersum
Case 3: 1-altersum
Case 4: 3-altersum</p>

<pre>