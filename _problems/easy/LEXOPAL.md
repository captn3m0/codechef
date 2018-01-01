---
category_name: easy
problem_code: LEXOPAL
problem_name: 'Faded Palindromes'
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
problem_author: ma5termind
problem_tester: dpraveen
date_added: 4-02-2016
tags:
    - ad
    - easy
    - ma5termind
    - sept16
    - string
editorial_url: 'http://discuss.codechef.com/problems/LEXOPAL'
time:
    view_start_date: 1473931800
    submit_start_date: 1473931800
    visible_start_date: 1473931800
    end_date: 1735669800
    current: 1493558214
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SEPT16/mandarin/LEXOPAL.pdf), [Russian](http://www.codechef.com/download/translated/SEPT16/russian/LEXOPAL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SEPT16/vietnamese/LEXOPAL.pdf) as well.

Chef likes strings a lot but he likes palindromic strings even more. Today he found an old string **s** in his garage. The string is so old that some of its characters have faded and are unidentifiable now. Faded characters in the string are represented by '.' whereas other characters are lower case Latin alphabets i.e \['a'-'z'\].

Chef being the palindrome lover decided to construct the lexicographically smallest palindrome by filling each of the faded character ('.') with a lower case Latin alphabet. Can you please help him completing the task?

### Input

First line of input contains a single integer **T** denoting the number of test cases. **T** test cases follow.

First and the only line of each case contains string **s** denoting the old string that chef has found in his garage.

### Output

For each test case, print lexicographically smallest palindrome after filling each faded character - if it possible to construct one. Print -1 otherwise.

### Constraints

- **1 ≤ T ≤ 50**
- **1 ≤ |s| ≤ 12345**
- String **s** consists of \['a'-'z'\] and '.' only.

### Subtasks

**Subtask #1 (47 points)**- **1 ≤ T ≤ 50, 1 ≤ |S| ≤ 123**

**Subtask #2 (53 points)**- **1 ≤ T ≤ 50, 1 ≤ |S| ≤ 12345**

### Example

**Input**```

3
a.ba
cb.bc
a.b


<pre>**Output**<pre>
abba
cbabc
-1

</pre>### Explanation
**In example 1**, you can create a palindrome by filling the faded character by 'b'.

**In example 2**, you can replace the faded character by any character from 'a' to 'z'. We fill it by 'a', as it will generate the lexicographically smallest palindrome.

**In example 3**, it is not possible to make the string **s** a palindrome.
