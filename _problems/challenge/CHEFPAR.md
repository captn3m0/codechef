---
category_name: challenge
problem_code: CHEFPAR
problem_name: 'Chef and Array (Challenge)'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: null
date_added: 2-01-2017
tags:
    - april18
    - challenge
    - factorization
    - mgch
    - mgch
    - random
    - simulation
editorial_url: 'https://discuss.codechef.com/problems/CHEFPAR'
time:
    view_start_date: 1523957400
    submit_start_date: 1523957400
    visible_start_date: 1523957400
    end_date: 1735669800
    current: 1525454416
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/APRIL18/mandarin/CHEFPAR.pdf), [Russian](http://www.codechef.com/download/translated/APRIL18/russian/CHEFPAR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL18/vietnamese/CHEFPAR.pdf) as well.

Chef has an integer $K$ and a randomly generated sequence $A\_1, A\_2, \\dots, A\_N$. He asks you to choose $N$ non-negative integers $D\_1, D\_2, \\dots, D\_N$ such that $D\_i \\le K$ for each valid $i$ and add $D\_i$ to $A\_i$ for each valid $i$. Also, Chef has $M$ primes $P\_1, P\_2, \\dots, P\_M$. It is guaranteed that for each valid $i$, $P\_i$ is the smallest prime greater than $P\_{i-1}$. After all addition operations are performed on the sequence $A$, he finds the product of all elements of $A$ and computes its remainders modulo each prime. Let's denote these remainders by $B\_1, B\_2, \\dots, B\_M$. Please help Chef maximise $\\frac{1}{M}\\sum\_{i=1}^M B\_i$. ### Input - The first line of the input contains three space-separated integers $N$, $M$ and $K$. - The second line contains $N$ space-separated integers $A\_1, A\_2, \\dots, A\_N$. - The third line contains $M$ space-separated integers $P\_1, P\_2, \\dots, P\_M$. ### Output Print a single line containing $N$ space-separated integers — the sequence $A\_1, A\_2, \\dots, A\_N$ obtained after performing all additions. ### Constraints - $1 \\le N, M \\le 10^4$ - $1 \\le K \\le 2\\cdot10^9$ - $1 \\le A\_i, P\_i \\le 2\\cdot10^9$ for each valid $i$ - $P\_i$ is the smallest prime greater than $P\_{i-1}$ for each valid $i$ ### Example Input ```
<tt>
4 4 5
1 2 3 4
5 7 11 13
</tt>
<pre>
\### Example Output ```
<tt>
2 6 6 9
</tt>
</pre>
\### Explanation We can choose $D = (1, 4, 3, 5)$ — that is, we're adding $1$ to $A\_1$, $4$ to $A\_2$, $3$ to $A\_3$ and $5$ to $A\_4$. After these addition operations, $A = (2, 6, 6, 9)$. Let's calculate the sequence $B$. - $B\_1 = (A\_1 \\cdot A\_2 \\cdot A\_3 \\cdot A\_4)\\;\\%\\; P\_1 = 3$ - $B\_2 = (A\_1 \\cdot A\_2 \\cdot A\_3 \\cdot A\_4)\\;\\%\\; P\_2 = 4$ - $B\_3 = (A\_1 \\cdot A\_2 \\cdot A\_3 \\cdot A\_4)\\;\\%\\; P\_3 = 10$ - $B\_4 = (A\_1 \\cdot A\_2 \\cdot A\_3 \\cdot A\_4)\\;\\%\\; P\_4 = 11$ The score for this output would be $(B\_1 + B\_2 + B\_3 + B\_4) / M = 28 / 4 = 7$. ### Score Your score for each test file will be the sum of all $B\_i$ divided by $M$. For the above example, the score you would obtain is $7$. ### Test Generation Process There are four types of tests and five test files (test cases) of each type. During the contest, the displayed score will account for exactly one test file of each type, i.e. your score reflects your submission's performance on 20% (1/5) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to the sum of your program's scores over all test files. The pseudocodes used for generating tests of each type are given below. Assume the function rnd.next(l, r) generates a random number uniformly in the range $l$ through $r$ (both inclusive) and nextPrime(x) finds the smallest prime greater than $x$. \*\*Type 1:\*\* ```
<tt>     
INF = 1000000000
N = 100
M = 10000
K = rnd.next(1, 1000000)
for i = 1 to N:
	A[i] = rnd.next(1, INF)
X = rnd.next(INF / 10, INF / 2) + INF
for i = 1 to M:
	P[i] = nextPrime(X)
	X = P[i]
</tt>
<pre>
 \*\*Type 2:\*\* ```
<tt>     
INF = 1000000000
N = 1000
M = 1000
K = rnd.next(1, 1000)
for i = 1 to N:
	A[i] = rnd.next(1, INF)
X = rnd.next(INF / 10, INF / 2) + INF
for i = 1 to M:
	P[i] = nextPrime(X)
	X = P[i]
</tt>
</pre>
 \*\*Type 3:\*\* ```
<tt>     

INF = 1000000000
N = 1000
M = 1000
K = rnd.next(1, 1000000)
for i = 1 to N:
	A[i] = rnd.next(1, INF)
X = rnd.next(INF / 10, INF / 2) + INF
for i = 1 to M:
	P[i] = nextPrime(X)
	X = P[i]
</tt>
<pre>
 \*\*Type 4:\*\* ```
<tt>     
INF = 1000000000
N = 10000
M = 100
K = rnd.next(1, 1000000)
for i = 1 to N:
	A[i] = rnd.next(1, INF)
X = rnd.next(INF / 10, INF / 2) + INF
for i = 1 to M:
	P[i] = nextPrime(X)
	X = P[i]
</tt>
</pre>