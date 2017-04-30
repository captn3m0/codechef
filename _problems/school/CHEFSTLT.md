---
category_name: school
problem_code: CHEFSTLT
problem_name: 'Chef and Two Strings'
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
problem_author: furko
problem_tester: xcwgf666
date_added: 14-06-2015
tags:
    - cakewalk
    - furko
    - ltime25
    - string
editorial_url: 'http://discuss.codechef.com/problems/CHEFSTLT'
time:
    view_start_date: 1435480200
    submit_start_date: 1435480200
    visible_start_date: 1435480200
    end_date: 1735669800
    current: 1492507586
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME25/mandarin/CHEFSTLT.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME25/russian/CHEFSTLT.pdf).

Chef has found two very old sheets of paper, each of which originally contained a string of lowercase Latin letters. The strings on both the sheets have equal lengths. However, since the sheets are very old, some letters have become unreadable.

Chef would like to estimate the _difference_ between these strings. Let's assume that the first string is named **S1**, and the second **S2**. The unreadable symbols are specified with the question mark symbol '?'. The _difference_ between the strings equals to the number of positions **i**, such that **S1i** is not equal to **S2i**, where **S1i** and **S2i** denote the symbol at the **i** the position in **S1** and **S2**, respectively.

Chef would like to know the minimal and the maximal difference between the two strings, if he changes all unreadable symbols to lowercase Latin letters. Now that you're fully aware of Chef's programming expertise, you might have guessed that he needs you help solving this problem as well. Go on, help him!

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of a test case contains a string **S1**.

The second line of a test case contains a string **S2**.

Both strings consist of lowercase Latin letters and question marks in places where the symbols are unreadable.

### Output

For each test case, output the minimal and the maximal difference between two given strings separated with a single space.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **|S1|, |S2|** ≤ **100**
- Subtask 1 (25 points): **|S1| = 1**
- Subtask 2 (10 points): neither **S1** nor **S2** contains unreadable symbols
- Subtask 3 (65 points): **1** ≤ **|S1|, |S2|** ≤ **100**

### Example

```
<b>Input:</b>
<tt>3
a?c
??b
???a
???a
?abac
aba?w</tt>

<b>Output:</b>
<tt>1 3
0 3
3 5</tt>

```
### Explanation

**Example case 1**. You can change the question marks in the strings so that you obtain **S1** = abc and **S2** = abb. Then **S1** and **S2** will differ in one position. On the other hand, you can change the letters so that **S1** = abc and **S2** = bab. Then, the strings will differ in all three positions.

**Example case 2**. Change the question marks this way: **S1** = dcba, **S2** = dcba, then the strings will differ in  positions. You can also change the question marks so that **S1** = aaaa, **S2** = dcba, then the strings will differ in **3** positions.

**Example case 3**. Change the question marks this way: **S1** = aabac, **S2** = abaaw, then the strings will differ in **3** positions. Then, change the question marks this way: **S1** = xabac, **S2** = abayw, then they will differ in **5** positions.