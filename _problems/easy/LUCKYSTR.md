---
category_name: easy
problem_code: LUCKYSTR
problem_name: 'Little Elephant and Strings'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: witua
problem_tester: anton_lunyov
date_added: 1-03-2012
tags:
    - cook22
    - easy
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LUCKYSTR'
time:
    view_start_date: 1337541022
    submit_start_date: 1337541022
    visible_start_date: 1337539200
    end_date: 1735669800
    current: 1493558165
layout: problem
---
All submissions for this problem are available.A Little Elephant from the Zoo of Lviv likes *lucky strings*, i.e., the strings that consist only of the lucky digits **4** and **7**.

The Little Elephant has **K** favorite lucky strings **A1, A2, ..., AK**. He thinks that the lucky string **S** is *good* if either **|S|** ≥ **47** or for some **j** from **1** to **K** we have that  **Aj** is a substring of **S**.

The Little Elephant has found **N** lucky strings **B1, B2, ..., BN** under the pillow. Now he wants to know which of them are good. Help him and find for each **i** from **1** to **N** whether the string **Bi** is good or not.

**Notes.**

Let **S** be some lucky string. Then - **|S|** denotes the length of the string **S**;
- **S\[i\]** (**1 ≤ i ≤ |S|**) denotes the **i**th character of **S** (the numeration of characters starts from **1**);
- The string **T** of the length **M** is called a *substring* of **S** if for some **k** from 0 to **|S| - M** we have 
  **T\[1\] = S\[k + 1\], T\[2\] = S\[k + 2\], ..., T\[M\] = S\[k + M\]**.

### Input

The first line of the input file contains two integers **K** and **N**, the number of favorite lucky strings of the Little Elephant and the number of strings he has found under the pillow. Each of the following **K** lines contains one favorite lucky string. Namely, **j**th line among these **K** lines contains the string **Aj**. Each of the following **N** lines contains one lucky string that was found under the pillow. Namely, **i**th line among these **N** lines contains the string **Bi**. The input file does not contain any whitespaces.

### Output

For each of the **N** strings that were found under the pillow print **Good** if it is good, and **Bad** otherwise.

### Constraints

1 ≤ **K, N** ≤ 50

For each string **S** in the input file we have 1 ≤ **|S|** ≤ 50.

Each string in the input file consists only of the lucky digits **4** and **7**.

### Example

<pre>

<b>Input:</b>
2 4
47
744
7444
447
7774
77777777777777777777777777777777777777777777774

<b>Output:</b>
Good
Good
Bad
Good

</pre>
### Explanation

The string **S = 7444** is good since the favorite string **744** is its substring.

The string **S = 447** is good since the favorite string **47** is its substring.

The string **S = 7774** is bad since none of the favorite strings **47** and **744** is a substring of **S**.

The string **S = 77777777777777777777777777777777777777777777774** is good since its length is **47**. Note, however, that **S** does not have favorite substrings at all.
