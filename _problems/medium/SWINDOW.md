---
category_name: medium
problem_code: SWINDOW
problem_name: 'Sherlock and Smallest Window'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: darkshadows
problem_tester: null
date_added: 5-10-2016
tags:
    - cook75
    - darkshadows
    - medium
    - segment
    - two
time:
    view_start_date: 1477247400
    submit_start_date: 1477247400
    visible_start_date: 1477247400
    end_date: 1735669800
    current: 1493557938
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK75/mandarin/SWINDOW.pdf), [Russian](http://www.codechef.com/download/translated/COOK75/russian/SWINDOW.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK75/vietnamese/SWINDOW.pdf) as well.

Watson has infinite supply of **K** different type of objects denoted by numbers **1** to **K**. He makes an array **A** of **N** objects, **A1, A2, ..., AN** using these objects.

Now, he'll update this array **Q** times. In **i**th update, he'll replace an existing object in array with a new object of different type from **1** to **K** *i.e.* **Axi = yi**.

After each update, he wants Sherlock to report the smallest size of a contiguous subarray which contains all types of objects *i.e.* smallest value of **R - L + 1** such that number of distinct values in **AL, AL + 1, ..., Ar** is **K**. If no such subarray exists, Sherlock should output **-1**.

### Input

First line contains **N**, **K** and **Q** denoting number of array elements, number of different types of objects and number of updates. Next line contains **N** space separated integers denoting the initial array **A**. **i**th of the next **Q** lines contains integers **xi** and **yi**, denoting the update parameters of the **i**th update.

### Output

After each update, output an integer in one line denoting the smallest contiguous subarray size consisting of all types of objects. If no such subarray exists, output **-1**.

### Constraints

- **1** ≤ **N** ≤ **105**
- **1** ≤ **K** ≤ **20**
- **1** ≤ **Q** ≤ **105**
- **1** ≤ **xi** ≤ **N**
- **1** ≤ **Ai, yi** ≤ **K**

### Example

<pre><b>Input:</b>
5 3 3
1 1 1 1 1
2 3
5 2
3 2

<b>Output:</b>
-1
4
3

</pre>
### Explanation

After first update, the array is **\[1, 3, 1, 1, 1\]**. No valid subarray exists at this stage.
After next update, the array is **\[1, 3, 1, 1, 2\]**. Here you can observe that contiguous subarray **\[A2, A3, ..., A5\]** consists of all types of objects. 
After next update, the array is **\[1, 3, 2, 1, 2\]**. Now, contiguous subarray **\[A1, A2, A3\]** is the smallest valid subarray.
