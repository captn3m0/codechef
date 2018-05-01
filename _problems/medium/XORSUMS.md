---
category_name: medium
problem_code: XORSUMS
problem_name: 'Bear and Xor of Sums'
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
max_timelimit: '4.5'
source_sizelimit: '50000'
problem_author: errichto
problem_tester: mnbvmar
date_added: 19-04-2017
tags:
    - cook81
    - errichto
    - medium
    - segment
editorial_url: 'https://discuss.codechef.com/problems/XORSUMS'
time:
    view_start_date: 1492972200
    submit_start_date: 1492972200
    visible_start_date: 1492972200
    end_date: 1735669800
    current: 1497284443
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK81/mandarin/XORSUMS.pdf), [Russian](http://www.codechef.com/download/translated/COOK81/russian/XORSUMS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK81/vietnamese/XORSUMS.pdf) as well.

Limak is a problem setter. Since he is lazy and cunning, he usually takes old problems and modifies them a bit (to not be accused of plagiarism), e.g. by swapping two words in the statement. This is how he created the following problem (and your task is to solve it):

Given a sequence with **N** positive integers, find the [xor](https://en.wikipedia.org/wiki/Bitwise_operation#XOR) of sums of all non-empty segments of the sequence.

In other words, for each of **N**\*(**N**+1)/2 non-empty consecutive subsequences find its sum of elements, and print the xor of those sums.

### Input

The first line of the input contains an integer **N** denoting the size of the sequence.

The second line contains **N** integers **a**1, **a**2, ..., **aN** — elements of the sequence.

### Output

Print one integer — the xor of sums of all non-empty segments of the sequence.

### Constraints

- 1 ≤ **N** ≤ 300,000
- 0 ≤ **a**i ≤ 50

### Example

<pre><b>Input1:</b>
3
7 5 13

<b>Output1:</b>
8

<b>Input2:</b>
6
11 4 4 13 11 5

<b>Output2:</b>
14
</pre>### Explanation

In the first example test, there are six non-empty segments. Their sums of elements are: 7, 7+5=12, 7+5+13=25, 5, 5+13=18, 13. The answer is 7 xor 12 xor 25 xor 5 xor 18 xor 13 = 8.
