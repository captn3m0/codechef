---
category_name: easy
problem_code: LIKECS02
problem_name: 'Statistics Construction'
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
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: likecs
problem_tester: kingofnumbers
date_added: 8-09-2017
tags:
    - construction
    - cook86
    - easy
    - likecs
    - likecs
editorial_url: 'https://discuss.codechef.com/problems/LIKECS02'
time:
    view_start_date: 1505673000
    submit_start_date: 1505673000
    visible_start_date: 1505673000
    end_date: 1735669800
    current: 1514816307
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK86/mandarin/LIKECS02.pdf), [Russian](http://www.codechef.com/download/translated/COOK86/russian/LIKECS02.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK86/vietnamese/LIKECS02.pdf) as well.

Chef Tobby asked Bhuvan to brush up his knowledge of statistics for a test. While studying some distributions, Bhuvan learns the fact that for symmetric distributions, the [mean](https://en.wikipedia.org/wiki/Mean) and the [median](https://en.wikipedia.org/wiki/Median) are always the same.

Chef Tobby asks Bhuvan out for a game and tells him that it will utilize his new found knowledge. He lays out a total of 109 small tiles in front of Bhuvan. Each tile has a distinct number written on it from **1** to **109**.

Chef Tobby gives Bhuvan an integer **N** and asks him to choose **N distinct tiles** and arrange them in a line such that the mean of median of all subarrays lies between **\[N-1, N+1\]**, both inclusive. The median of subarray of even length is the mean of the two numbers in the middle after the subarray is sorted

Bhuvan realizes that his book didn’t teach him how to solve this and asks for your help. Can you solve the problem for him?

In case, no solution exists, print **-1**.

### Input section

First line contains, **T**, denoting the number of test cases.

Each of the next **T** lines, contain a single integer **N**.

### Output section

If no solution, exists print **-1**.

If the solution exists, output **N** space separated integers denoting the elements of the array **A** such that above conditions are satisfied. In case, multiple answers exist, you can output any one them.

### Input constraints

<pre>
1 ≤ T ≤ 20
1 ≤ N ≤ 100
</pre>
### Sample Input

<pre>
3
1
2
3
</pre>
### Sample Output

<pre>
1
1 2
1 2 3
</pre>
### Explanation

For test case **3**, the subarrays and their median are as follows:

1. **{1}**, median = **1**
2. **{2}**, median = **2**
3. **{3}**, median = **3**
4. **{1, 2}**, median = **1.5**
5. **{2, 3}**, median = **2.5**
6. **{1, 2, 3}**, median = **2**

The mean of the medians is **2** which lies in the range **\[2, 4\]**
