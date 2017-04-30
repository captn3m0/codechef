---
category_name: medium
problem_code: ANKLEX
problem_name: 'Lex Next'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: code_master01
problem_tester: null
date_added: 5-04-2015
tags:
    - code_master01
    - snck15el
editorial_url: 'http://discuss.codechef.com/problems/ANKLEX'
time:
    view_start_date: 1434135600
    submit_start_date: 1434135600
    visible_start_date: 1434135600
    end_date: 1735669800
    current: 1493557462
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCK15EL/mandarin/ANKLEX.pdf) , [Russian](http://www.codechef.com/download/translated/SNCK15EL/russian/ANKLEX.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCK15EL/vietnamese/ANKLEX.pdf)

Lucy has been gifted a string **S**, by her best friend. Now, She is going to write all the sub-strings of different lengths on different pages of her diary. So, she writes the sub-strings of length 1 on page 1, substrings of length 2 on page 2 and so on.

While writing out the sub-strings, she notices that several of them are repeated. She gets frustrated from writing the same string several times, and asks for Mark's help.

He suggests that she should write them in sorted order. But, Mark isn't so proficient with strings that he can help her to get this work done quickly.

Now, you have to write a program to help her. Lucy shall tell you the index and length of the last substring that she has written. You must output the index of the next substring that she should write on the same page. it is possible that all substrings of the given length have already been written, so your program should notify her of the same by printing -1. Here. the index of a substring refers to index of the first character of the said string

Note that the next substring to be written may be present at more than one indices, you should output the smallest index so that it is easier for Lucy to find it. Note that you should never tell her to write the same substring again.

### Input:

The first line shall contain the string **S**. The next line contains integer **Q**, the number of times Lucy asks for your help.
Each of the next **Q** lines, contain two space-separated integers **idx** and **len**, denoting the index and length of the substring that she has already written. Please understand that each of the **Q** lines represent an independent request.

### Output:

Output exactly **Q** lines, each containing the required index.

### Constraints:

**- 1 ≤ |S| ≤ 105
- 1 ≤ Q ≤ 105
- 1 ≤ idx ≤ |S|
- 1 ≤ len ≤ |S| - idx + 1
- S contains only the characters 'a' to 'z'** ### Example:

**Input:**

```

abcb
4
1 1
1 2
2 3
2 2


```
**Output:**

```

2
2
-1
3

```
### Explanation

**Request 1:**
The last written substring was **a**, so the next substring should be **b**, which is present at index 2 as well as index 4.
However, we should print 2 as it is the smaller index.

**Request 2:**
The last written substring was **ab**. Amongst the substrings of length 2, **bc** and **cb** are possible candidates, but **bc** is lexicographically smaller, so it should be the substring to be written next, so as to maintain sorted order.
Thus, we should output index 2.

**Request 3:**The last written substring was **bcb**. There is no substring of length 3 that follows this substring in lexicographical order. The only other substring of length 3 is **abc**, which is smaller and would have already occured.
Thus, there is no substring to be written next, and we should output -1.

**Request 4:**
Try to figure this out yourself.