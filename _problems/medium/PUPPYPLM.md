---
category_name: medium
problem_code: PUPPYPLM
problem_name: 'Puppy and Palindromes'
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
max_timelimit: '7'
source_sizelimit: '50000'
problem_author: pavel1996
problem_tester: kostya_by
date_added: 23-06-2015
tags:
    - constructive
    - cook67
    - hashing
    - palindromes
    - pavel1996
editorial_url: 'http://discuss.codechef.com/problems/PUPPYPLM'
time:
    view_start_date: 1456081200
    submit_start_date: 1456081200
    visible_start_date: 1456081200
    end_date: 1735669800
    current: 1493557868
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK67/mandarin/PUPPYPLM.pdf), [Russian](http://www.codechef.com/download/translated/COOK67/russian/PUPPYPLM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK67/vietnamese/PUPPYPLM.pdf) as well.

A recent survey suggested that almost everybody knows that a palindrome is a string which reads the same backwards as forwards. More recently, puppy Tuzik invented a brand-new concept: **K-palindromes**. A string is called a **K-palindrome** if it is possible to make it a usual palindrome by replacing at most **K** characters. For example, a string abb can be made a palindrome by replacing one character, the second b with an a. Please note, that according to the definition, a usual palindrome is a **K-palindrome** for any non-negative integer **K**.

Today, Tuzik was walking in a garden and came across a string **S** of **N** characters. Now, he wants to know the sum of the lengths of all substrings of **S** which are **K-palindromes**. Note that two substrings are considered to be different if they cover the different ranges of indices, even if they are equal as strings.

### Input

The first line of input contains an integer **T** denoting the number of test cases. Each of the next **T** lines contains a description of a separate test case.

The only line of the test case description contains two integers **N** and **K** followed by string **S**, all separated by single spaces. **S** consists of lowercase Latin characters only.

### Output

For each test case, output a single line containing one integer: the answer for the test case.

### Constraints

- **1** ≤ **T** ≤ **5**
- **1** ≤ **N** ≤ **105**
- ≤ **K** ≤ **5**

### Example

```
<b>Input:</b>
2
7 0 abacaba
7 1 abacaba

<b>Output:</b>
28
56

```
### Explanation

**Test case 1:**
 There are:

- **7** 0-palindromes with length **1** (just each character)
- **3** 0-palindromes with length **3** (**aba, aca, aba**)
- **1** 0-palindrome with length **5** (**bacab**)
- **1** 0-palindrome with length **7** (**abacaba**)
. 
The total length: **7\*1 + 3\*3 + 1\*5 + 7\*1 = 28****Test case 2:**
 There are:

- **7** 1-palindromes with length **1** (just each character)
- **6** 1-palindromes with length **2** (each substring with length **2**)
- **5** 1-palindromes with length **3** (each substring with length **3**)
- **3** 1-palindromes with length **5** (**abaca**,**bacab**, **acaba**)
- **1** 1-palindrome with length **7** (**abacaba**)
. 
The total length: **7\*1 + 6\*2 + 5\*3 + 5\*3 + 7\*1 = 56**