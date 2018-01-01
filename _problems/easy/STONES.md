---
category_name: easy
problem_code: STONES
problem_name: 'Jewels and Stones'
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
problem_author: yellow_agony
problem_tester: subra
date_added: 26-02-2012
tags:
    - easy
    - may12
    - yellow_agony
editorial_url: 'http://discuss.codechef.com/problems/STONES'
time:
    view_start_date: 1336722949
    submit_start_date: 1336722949
    visible_start_date: 1336722949
    end_date: 1735669800
    current: 1493558190
layout: problem
---
All submissions for this problem are available.Soma is a fashionable girl. She absolutely loves shiny stones that she can put on as jewellery accessories. She has been collecting stones since her childhood - now she has become really good with identifying which ones are fake and which ones are not. Her King requested for her help in mining precious stones, so she has told him which all stones are jewels and which are not. Given her description, your task is to count the number of jewel stones. More formally, you're given a string J composed of latin characters where each character is a jewel. You're also given a string S composed of latin characters where each character is a mined stone. You have to find out how many characters of S are in J as well.

### Input

First line contains an integer T denoting the number of test cases. Then follow T test cases. Each test case consists of two lines, each of which contains a string composed of English lower case and upper characters. First of these is the jewel string J and the second one is stone string S. You can assume that 1 Output

Output for each test case, a single integer, the number of jewels mined.

### Example

<pre>
<b>Input:</b>
4
abc
abcdef
aA
abAZ
aaa
a
what
none

<b>Output:</b>
3
2
1
0

</pre>