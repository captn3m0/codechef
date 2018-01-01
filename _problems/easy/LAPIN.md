---
category_name: easy
problem_code: LAPIN
problem_name: Lapindromes
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
problem_author: vamsi_kavala
problem_tester: tuananh93
date_added: 1-05-2013
tags:
    - ad
    - cakewalk
    - june13
    - vamsi_kavala
editorial_url: 'http://discuss.codechef.com/problems/LAPIN'
time:
    view_start_date: 1371461400
    submit_start_date: 1371461400
    visible_start_date: 1371461400
    end_date: 1735669800
    current: 1493558159
layout: problem
---
All submissions for this problem are available._Lapindrome_ is defined as a string which when split in the middle, gives two halves having the same characters and same frequency of each character. If there are odd number of characters in the string, we ignore the middle character and check for lapindrome. For example **_gaga_** is a lapindrome, since the two halves **_ga_** and **_ga_** have the same characters with same frequency. Also, **_abccab_**, **_rotor_** and **_xyzxy_** are a few examples of lapindromes. Note that **_abbaab_** is NOT a lapindrome. The two halves contain the same characters but their frequencies do not match. 
 Your task is simple. Given a string, you need to tell if it is a lapindrome.

### Input:

First line of input contains a single integer **T**, the number of test cases.
Each test is a single line containing a string **S** composed of only lowercase English alphabet.
### Output:

For each test case, output on a separate line: "YES" if the string is a lapindrome and "NO" if it is not.
### Constraints:

- 1 ≤ **T** ≤ 100
- 2 ≤ |**S**| ≤ 1000, where |**S**| denotes the length of **S**

### Example:

**Input:**```

6
gaga
abcde
rotor
xyzxy
abbaab
ababc



<pre>**Output:**<pre>
YES
NO
YES
YES
NO
NO


</pre>