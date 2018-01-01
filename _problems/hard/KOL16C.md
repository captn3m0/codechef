---
category_name: hard
problem_code: KOL16C
problem_name: 'Zeroes VII'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '6'
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
    current: 1493556745
layout: problem
---
All submissions for this problem are available.Factorial n or n! is defined as below:

<pre>
n! = 1*2*3*...*n

</pre>For example **7! = 1\*2\*3\*4\*5\*6\*7 = 5040**. Now, if we prime factorize a factorial we will be able to find the frequency of each prime in it For example **7!= 5040 = 24\*32\*5\*7**. So there are exactly four **2**'s, two **3**'s, one **5** and one **7** in **7!**. For factorials of large numbers prime-factorization is not a good idea and there are many better ways to find out frequency of prime numbers it factorials of large number. Now consider **15** numbers **1!, 2!, 3!, 4!, 5!, 6!, 7!, 8!, 9!, 10!, 11!, 12!, 13!, 14!, 15!** and a set of consecutive prime numbers **{3, 5, 7, 11, 13}** (2nd, 3rd, 4th, 5th and 6th) and an integer **2** (The frequency) and you are asked to find how many of these numbers have one prime from the set of primes exactly two times. The answer will be **9** and these 9 numbers are shown below:
 **Value****Primes that are present exactly 2 times** 6!37!38!310!511!512!513!514!5, 715!7  In this problem you are asked to solve a generalized version of this problem. Given a set of factorials of consecutive numbers **F**, a set of consecutive prime numbers **P** and an integer **t**, you job is two find out how many of the numbers in **F** contains any one of the prime numbers from set **P** exactly **t** times. But if more than one prime from **P** is present exactly **t** times in some number, it is ok.

### Input

The first line contains a positive integer **C (0<C<51)** which denotes the total number of test cases to follow. Each of the next **C** lines consists input for a single test case. Each line contains five positive integers **low, high (0 < low < high ≤ 2\*1016), plow, phigh (0 < plow < phigh ≤ 3000000)** and **t (0 < t ≤ 300000)**. These numbers denotes that you have to deal with the set of factorial of consecutive numbers **low!, (low+1)!, (low+2)! ..., (high-1)!, high!** and a set of primes **P** which contains **Pplow, Pplow+1, ..., Pphigh**. Primes are numbered starting from **1**, so **P1** is actually **2, P2=3, P3=5, P4=7, P5=11** etc. You will have to find how many of these factorials contains one or more primes from this set **P** exactly **t** times. ### Output

For each test case produce one line of output. This line contains at integer **M**, which denotes how many of the numbers **low!, (low+1)!, (low+2)! ..., (high-1)!, high!** contains at least one prime from set **P** exactly **t** times.

### Sample

<pre>
<b>Input</b>
2
10 20 1 5 3
10 20 1 5 6

<b>Output</b>
5
3

</pre>