---
category_name: easy
problem_code: ANKPAL
problem_name: 'Palindromic Queries'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: code_master01
problem_tester: null
date_added: 6-06-2015
tags:
    - code_master01
    - snck15el
editorial_url: 'http://discuss.codechef.com/problems/ANKPAL'
time:
    view_start_date: 1434135600
    submit_start_date: 1434135600
    visible_start_date: 1434135600
    end_date: 1735669800
    current: 1493558106
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCK15EL/mandarin/ANKPAL.pdf) , [Russian](http://www.codechef.com/download/translated/SNCK15EL/russian/ANKPAL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCK15EL/vietnamese/ANKPAL.pdf)

Mark has recently started studying string algorithms. So, as to gauge his knowledge, Lucy challenges him to a task.

"Given a string **s**, answer several times a query to determine whether a _substring_ **s\[i, j\]** (inclusive) is palindromic or not.", said Lucy in a confident tone!

As smart as Mark is, he was able to instantly find the solution!

Now, Mark has challenged little Lucy to do the same task by reversing a specific substring beforehand. As Lucy is still just a novice, she asks for your help.

You have to write a program that answers **Q** queries on a string **S**.

Each query contains four integers (**i**, **j**, **k**, **l**). For every query, first reverse the _substring_ **s\[i, j\]** (inclusive) and then report if _substring_ **s\[k, l\]** (inclusive) is a palindrome.

Note that the reversal operations are only for the specific query and should not persist for further queries. Please check the explanation section for better understanding.

### Input:

The first line of input file contains string **S**. The next line contains an integer **Q**.
Each of the following **Q** lines each contain 4 space separated integers **i, j, k and l.**

### Output:

Output exactly _Q_ lines, each containing the result of corresponding query as _"Yes"_ or _"No"_.

### Constraints:

**- 1 ≤ |S| ≤ 105
- 1 ≤ Q ≤ 333333
- 1 ≤ i ≤ j ≤ |S|
- 1 ≤ k ≤ l ≤ |S|
- S contains only the characters 'a' to 'z'** ### Example:

**Sample Input:**

```

ababa
4
2 3 3 4
1 2 3 4
1 3 3 5
2 4 1 5


```
**Sample Output:**

```

Yes
No
Yes
Yes

```
### Explanation:

**Query 1:**The string becomes a**ab**ba. The queried substring is _bb_, which is a palindrome.

**Query 2:**The string becomes **ba**aba. The queried substring is _ab_, which is not a palindrome.

**Query 3:**The string becomes **aba**ba. The queried substring is _aba_, which is a palindrome.

**Query 4:**The string becomes a**bab**a. The queried substring is _ababa_, which is a palindrome.

### Notes:

- Here, a substring \[i, j\] is defined as the string formed by characters s\[i\], s\[i+1\],..., s\[j\].
- A palindrome is a sequence of characters which reads the same backward or forward. For example, **aba**, **abba** are palindromes, while **abab** and **abcd** are not palindromes.