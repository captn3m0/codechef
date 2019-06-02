---
category_name: medium
problem_code: LEBOBBLE
problem_name: 'Little Elephant and Bubble Sort'
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
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '6'
source_sizelimit: '50000'
problem_author: witua
problem_tester: laycurse
date_added: 10-05-2012
tags:
    - july12
    - medium
    - probability
    - segment
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LEBOBBLE'
time:
    view_start_date: 1342000231
    submit_start_date: 1342000231
    visible_start_date: 1341999849
    end_date: 1735669800
    current: 1493557740
layout: problem
---
All submissions for this problem are available.Little Elephant loves bubble sorting.

Bubble sorting for any array **A** of **n** integers works in the following way:

 *var int i, j; 
 for i from n downto 1 
 { 
 for j from 1 to i-1 
 { 
 if (A\[j\] > A\[j+1\]) 
 swap(A\[j\], A\[j+1\]) 
 } 
}*

You are given an array **B** of **n** integers. Then the array **A** is created using array **B** as following : for each **i** (**1 <= i <= n**), we set **Ai** = **Bi + d** with the probability **Pi**, otherwise **Ai** = **Bi**.

Help Little Elephant to find the expect number of swaps that bubble sorting will make when the array **A** is sorted with the above bubble sorting algorithm.

### Input

First line of the input contains single integer **T** - the number of test cases. **T** test cases follows. First line of each test case contains pair of integers **n** and **d**. Next line of each test case contains **n** integers - array **B**. Next line contains **n** integers - array **P**.

### Output

In **T** lines print **T** real numbers - the answers for the corresponding test case. Please round all numbers to exactly 4 digits after decimal point.

### Constraint

1 <= **T** <= 5

1 <= **n** <= 50000

1 <= **Bi, d** <= 10^9

0 <= **Pi,** <= 100

### Example

<pre><b>Input:</b>
2
2 7
4 7
50 50
4 7
5 6 1 7
25 74 47 99

<b>Output:</b>
0.2500
1.6049

</pre>