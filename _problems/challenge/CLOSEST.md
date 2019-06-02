---
category_name: challenge
problem_code: CLOSEST
problem_name: 'Closest Points'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
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
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '0.499541'
source_sizelimit: '50000'
problem_author: gamabunta
problem_tester: anton_lunyov
date_added: 24-04-2011
tags:
    - challenge
    - gamabunta
    - geometry
    - june12
    - kd
editorial_url: 'http://discuss.codechef.com/problems/CLOSEST'
time:
    view_start_date: 1339403800
    submit_start_date: 1339403800
    visible_start_date: 1339407000
    end_date: 1735669800
    current: 1525199507
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Crisis at Byte Town!

There have been 100000 (of course, in base 2) instances of bank robberies in the past month! That is, more than one robbery in a day in average and the Byte Town Police Department (BTPD) is dumb founded. Chef, the honorable President of Byte Town, has pledged to solve the problem for good.

Chef investigated and found out that Byte Town has a large number of BTPD response centers and an equally large (if not larger) number of banks. Each bank has an alert mechanism that alerts a BTPD response center assigned to the bank. That response center is then responsible for sending in a strike team. The response center assigned to some bank is called the respondent for this bank. Unfortunately, that is the problem. The current assignment of which BTPD response center responds to an alert by a bank is outdated. Chef has decided to upgrade this system, in lieu of which, you have to solve this problem.

Byte Town, being the quintessential challenge for every programmer, is Euclidean 3D space. Each response center and each bank is represented by some point in this 3D space. There are **N** response centers and **Q** banks in Byte Town. BTPD response centers are labeled by integers **0, 1, ..., N-1** and **i**th response center is represented by the point with coordinates **(Xi, Yi, Zi)**. Banks are labeled by integers **0, 1, ..., Q-1** and **j**th bank is represented by the point with coordinates **(Aj, Bj, Cj)**. **No two buildings (banks, as well as response centers) will ever be at the same point.** Your task is to assign for each bank the BTPD response center that will be the respondent for this bank. **A response center can be the respondent for more than one bank. But every bank should have exactly one respondent.**

Bluntly speaking, your goal is to minimize the Euclidian distance between bank and its respondent. The Euclidian distance between **i**th response center and **j**th bank is equal to the square root of the number **(Xi – Aj)2 + (Yi – Bj)2 + (Zi – Cj)2**.

Denote by **C\[j\]** the closest response center to the **j**th bank and by **D\[j\]** the distance to it. Your absolute goal is to find **C\[j\]** for all banks. **But since it is the challenge problem you can get accepted even if your assignment will be not optimal.** But to get accepted you need to find **C\[j\]** for at least one value of **j**. To make things clear we note that **C\[j\]** could be not unique, so by the phrase **"to find C\[j\]"** we mean to find any response center that has distance **D\[j\]** to the **j**th bank.

### Input

The first line of the input file contains an integer **N**, the number of BTPD response centers. Each of the following **N** lines contains three integers **Xi, Yi, Zi**, the coordinates of the **i**th response center. The next line contains an integer **Q**, the number of banks. Each of the following **Q** lines contains three integers **Aj, Bj, Cj**, the coordinates of the **j**th bank. Each pair of consecutive numbers in every line is separated by exactly one space.

### Output

For each of the **Q** banks from the input file you should print exactly one line that contains the number from the set **{0, 1, ..., N-1}**, the response center that you have assigned to the corresponding bank. So the **(j+1)**th line of the output file should contain the respondent of the **j**th bank. Just to re-iterate, **your output will be considered as correct if and only if you print exactly **Q** integers **I0, I1, ..., IQ-1**, each from 0 to **N-1** (inclusive) such that for at least one value of **j** from 0 to **Q-1** (inclusive) we have that the **Ij**th response center is the closest response center to the **j**th bank.**

### Scoring

Your score for a test file is the total number of banks for which you find the closest possible response center. Formally the score is the number of those values of **j** from 0 to **Q-1** such that the distance between **j**th bank and the response center that you have assigned to it is equal to **D\[j\]**. The total score for a submission is the average score across all the test files.

### Constraints

**1** ≤ **N**, **Q** ≤ **50000**

Each point in the input file has coordinates with absolute value no more than **109**. 
That is, **|Xi|, |Yi|, |Zi|, |Aj|, |Bj|, |Cj|** ≤ **109**

### Example

<pre>
<b>Input:</b>
3
1 0 0
0 0 1
0 1 0
2
0 -1 0
0 0 -1

<b>Output:</b>
0
1
</pre>
### Explanation

Consider the 0th bank. It has coordinates **(0, -1, 0)**. Hence the squares of distances from this bank to response centers are

- to the 0th center: **(1 – 0)2 + (0 – (-1))2 + (0 – 0)2 = 1 + 1 + 0 = 2**;
- to the **1**st center: **(0 – 0)2 + (0 – (-1))2 + (1 – 0)2 = 0 + 1 + 1 = 2**;
- to the **2**nd center: **(0 – 0)2 + (1 – (-1))2 + (0 – 0)2 = 0 + 22 + 0 = 4**.

Thus, the closest response centers to the 0th bank are both 0th and **1**st response centers. Since in the output we assign 0th response center to this bank we find one of the closest response centers to this bank and it will be counted in our resulting score.

Now consider the **1**st bank. It has coordinates **(0, 0, -1)**. Hence the squares of distances from this bank to response centers are

- to the 0th center: **(1 – 0)2 + (0 – 0)2 + (0 – (-1))2 = 1 + 0 + 1 = 2**;
- to the **1**st center: **(0 – 0)2 + (0 – 0)2 + (1 – (-1))2 = 0 + 0 + 22 = 4**;
- to the **2**nd center: **(0 – 0)2 + (1 – 0)2 + (0 – (-1))2 = 0 + 1 + 1 = 2**.

Thus, the closest response centers to the **1**st bank are both 0th and **2**nd response centers. Since in the output we assign **1**st response center to this bank we fail to find the closest response center to this bank and it will not be counted in our resulting score.

Thus, total score for this test case would be **1**. Since we find the closest response center to at least one bank such output will be considered as correct.

### Test Generation

In each official test file **N = Q = 50000**. Coordinates of banks and response centers are generated using different strategies. In some tests coordinates are uniformly distributed within its range while other tests created specifically to fail certain heuristics.
