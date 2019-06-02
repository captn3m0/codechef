---
category_name: school
problem_code: MATPAN
problem_name: 'Mathison and pangrams'
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
problem_author: alexvaleanu
problem_tester: kingofnumbers
date_added: 22-08-2017
tags:
    - alexvaleanu
    - cakewalk
    - looping
    - ltime51
editorial_url: 'https://discuss.codechef.com/problems/MATPAN'
time:
    view_start_date: 1503768600
    submit_start_date: 1503768600
    visible_start_date: 1503768600
    end_date: 1735669800
    current: 1514815984
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/LTIME51/mandarin/MATPAN.pdf), [russian](http://www.codechef.com/download/translated/LTIME51/russian/MATPAN.pdf) and [vietnamese](http://www.codechef.com/download/translated/LTIME51/vietnamese/MATPAN.pdf) as well.

 Mathison recently inherited an ancient papyrus that contained some text. Unfortunately, the text was not a **pangram**. Now, Mathison has a particular liking for holoalphabetic strings and the text bothers him. The good news is that Mathison can buy letters from the local store in order to turn his text into a pangram.

 However, each letter has a price and Mathison is not very rich. Can you help Mathison find the cheapest way to obtain a pangram?

### Input

The first line of the input file will contain one integer, **T**, representing the number of tests.

Each test will be formed from two lines. The first one contains **26** space-separated integers, representing the prices of all letters. The second will contain Mathison's initial text (a string of **N** lowercase letters).

### Output

The output file will contain **T** lines, one for each test. Each line will contain the answer for the corresponding test.

### Constraints and notes

- 1 ≤ **T** ≤ 10
- 1 ≤ **N** ≤ 50,000
- All prices are natural numbers between 1 and 1,000,000 (i.e. 106).
- A pangram is a string that contains every letter of the Latin alphabet at least once.
- All purchased letters are added to the end of the string.

### Subtaks

**Subtask #1** (30 points):

- **N** = 1

**Subtask #2** (70 points):

- Original constraints

### Example

<pre><b>Input:</b>
2
1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26
abcdefghijklmopqrstuvwz
1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26
thequickbrownfoxjumpsoverthelazydog

<b>Output:</b>
63
0
</pre>
### Explanation

<pre>
First test
There are three letters missing from the original string: n (price 14), x (price 24), and y (price 25).
Therefore the answer is 14 + 24 + 25 = 63.

Second test
No letter is missing so there is no point in buying something. The answer is 0.
</pre>