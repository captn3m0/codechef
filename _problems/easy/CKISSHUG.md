---
category_name: easy
problem_code: CKISSHUG
problem_name: 'Kisses & Hugs'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kaushik_iska
problem_tester: laycurse
date_added: 12-04-2012
tags:
    - exponentiation
    - kaushik_iska
    - maths
    - matrix
    - sep12
editorial_url: 'http://discuss.codechef.com/problems/CKISSHUG'
time:
    view_start_date: 1347356059
    submit_start_date: 1347356059
    visible_start_date: 1347355800
    end_date: 1735669800
    current: 1493558131
layout: problem
---
All submissions for this problem are available. Princess Artapoelc greeted her guests by either kissing on the cheek (**K**) or hugging (**H**). From the first guest she kisses, she has a compulsion to necessarily kiss every alternate guest from that first kissed guest. That is if the guests are **G**1, **G**2, ..., **G**i, **G**i+1, ..., **G**n and if she first kissed **G**i then she must necessarily kiss **G**i+2, **G**i+4, **G**i+6 ... till the last possible guest. Your task is to determine in how many ways she can greet **N** guests.

 **Input**

First line of the input contains **T (T ≤ 1000)** denoting the number of test cases.

 **T** lines follow each containing a single integer **N (1 ≤ N ≤ 10^9)** denoting the number of guests.

 **Output**

 For each case the output should be a single integer representing the number of ways Artapoelc can greet **N** guests. As the answer can be large print it modulo **1000000007**.

 **Example**

 **Input**

 ```

3
1
2
3
    
<pre> **Output**
 ```

2
4
6
   
</pre> **Explanation:**
 In the first case the possible ways are

 K, H

 Second case:

 KH, HK, HH, KK

 Third case:

 HHH, HHK, HKH, HKK, KHK, KKK
