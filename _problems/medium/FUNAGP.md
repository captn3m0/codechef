---
category_name: medium
problem_code: FUNAGP
problem_name: 'Fun with AGp'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: devuy11
problem_tester: xcwgf666
date_added: 8-03-2014
tags:
    - bit
    - devuy11
    - hard
    - may14
    - segment
editorial_url: 'http://discuss.codechef.com/problems/FUNAGP'
time:
    view_start_date: 1399887000
    submit_start_date: 1399887000
    visible_start_date: 1399887000
    end_date: 1735669800
    current: 1493557671
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/MAY14/mandarin/FUNAGP.pdf) and [Russian](http://www.codechef.com/download/translated/MAY14/russian/FUNAGP.pdf).

You are given an 1-based array **A** and its fixed parameters: **R**, **p1**, **p2**. You need to mantain this array, performing some operations. The operations are as follows:

4. 0 **S D X Y**
  
  Add an [AGP](https://en.wikipedia.org/wiki/Arithmetico-geometric_sequence) with the start term of **S**, the common difference of **D**, common ratio of **R** from the **X**-th to the to **Y**-th element of **A**.
  
  In other words: add **S** , **(S+D)\*R** , **(S+2D)\*R2** ,....., **(S+(Y-X)\*D)\*RY-X** respectively to **A\[X\]**, **A\[X+1\]**, ..., **A\[Y\]**.
5. 1 **X g**
  
  Replace the value of **A\[X\]** to **(A\[X\])g** modulo **p2**.
  
  In other words: **A\[x\]** = **(A\[X\])g** modulo **p2**.
6. 2 **X Y**
  
  Report the sum of elements in **A** from the **X**-th to the **Y**-th modulo **p1**.
  
  In other words: output (**A\[X\]** + ...... + **A\[Y\]**) modulo **p1**.
### Input

The first line of input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains **5** single space separated integers: **N**, **Q**, **R**, **p1**, **p2**).

The next line contains **N** single space separated integers (each is between 0 and **100000** inclusive).

Then, there are **Q** lines denoting the queries in the format, described above.

### Output

For each query of the type 2 output the sum of all elements of **A** from the **X**-th to the **Y**-th modulo **p1**.

### Constraints

- 1 ≤ Sum of **N** over all testcases ≤ 105
- 1 ≤ Sum of **Q** over all testcases ≤ 105
- 1 ≤ **N**, **Q**, **S**, **D** ≤ 105
- **p1**, **p2** are primes
- 2 ≤ **p1**, **p2** ≤ 108
- 1 ≤ **R** ≤ 109
- 1 ≤ **g** ≤ 103

### Example

**Input**

2

5 3 2 7 11

0 0 0 0 0

0 2 3 1 3

1 2 2

2 1 5

5 3 3 11 7

1 2 3 4 5

0 2 3 1 3

1 2 2

2 1 5



**Output**

0

1



**Explanation**

15. **The first test case**
  
  
  Initially **A** = \[0,0,0,0,0\] 
  
  After the first query : **A** = \[2,10,32,0,0\]
  
  After the second query : **A** = \[2,1,32,0,0\] as (10 \* 10) modulo 11 = 1
  
  So in the third query : 2 + 1 + 32 + 0 + 0 = 35 , so 35 modulo 7 = 0
16. **The second test case**
  
  
  Initially **A** = \[1,2,3,4,5\] 
  
  After the first query : **A** = \[3,17,75,4,5\]
  
  After the second query : **A** = \[3,2,75,4,5\] as (17\*17) modulo 7 = 2
  
  So in the third query : 3 + 2 + 75 + 4 + 5 = 89 , so 89 modulo 11 = 1
