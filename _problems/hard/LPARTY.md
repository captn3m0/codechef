---
category_name: hard
problem_code: LPARTY
problem_name: 'Little Party'
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
max_timelimit: '1.2'
source_sizelimit: '50000'
problem_author: pavel1996
problem_tester: xcwgf666
date_added: 25-02-2015
tags:
    - april15
    - backtracking
    - bitmasking
    - hard
    - maths
    - pavel1996
editorial_url: 'http://discuss.codechef.com/problems/LPARTY'
time:
    view_start_date: 1428917400
    submit_start_date: 1428917400
    visible_start_date: 1428917400
    end_date: 1735669800
    current: 1493556759
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL15/mandarin/LPARTY.pdf) and [Russian](http://www.codechef.com/download/translated/APRIL15/russian/LPARTY.pdf).

A little party never killed nobody... After listening to this song many times Leha has decided to get together with his friends and have some fun again. But things are not as simple as you might think.

 Leha has **N** friends and he already had **M** parties with them and for some reason all these events were not good. He guesses that sometimes guys can't get across with each other.

All his friends respect him and they always have come independently of their mood. And here is the problem: there is always some subset of his friends at the party that guys from these subset become angry.

Now Leha wants to analyze previous events and find some groups of his friends(maybe empty) with correspondent moods which usually lead to problems. He perfectly remembers their states during previous time. A friend could have come either with good mood(in this case we will denote it as an upper-case Latin letter) or with bad mood(in this case we will denote it as an lower-case Latin letter). The same letters(even if their cases differ) correspond to one friend and different letters correspond to different friends.

Let's consider an example: Leha has 3 friends and he had 3 parties with them with states **AbC**(friends A and C were in good mood, but B was in bad mood), **Abc**(A was in good mood, others were in bad), **aBC**(A was in bad mood, others were in good). During all these parties something had gone wrong. We can notice that when there is subset **Ab**(A was in good mood, but B was in bad mood) party is spoiled and the mood of friend **C** doesn't matter. We also have party with state **aBC** which gives us problems. We can't say anything special about other subsets(for example: here all parties are spoiled with subsets **A**, **b** but we don't have enough information to assume that these subsets are always bad)

So we have two subsets which if are presented guarantee us some problems: **Ab** and **aBC**. We will call them _key subsets_. Leha wants to find several key subsets with minimal total size that describe all problem parties. In the example enough key subsets with minimal total size are: **Ab** and **aBC** with total size of 5. He could also find subsets straightforwardly **AbC**, **Abc**, **aBC** but their total size would be 9, so he will choose the first option.

The idea of finding problem key subsets with minimal total size is good, but Leha doesn't like time-consuming and boring tasks. He asks you to do this job for him.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. Each of the following**T** test cases starts with two integer numbers **N** and **M**. **M** strings describing failed parties that already have been hold follow(one string per one line). Each string consists of **N** first Latin letters.

### Output

For each test case, output a single line containing one integer - the minimal possible total size of key subsets.

### Constraints

- **1** ≤ **T** ≤ **120**
- ≤ **M** ≤ **1000**

Subtask 1 (23 points):

- **1** ≤ **N** ≤ **3**

Subtask 2 (77 points)

- **1** ≤ **N** ≤ **5**

### Example

<pre><b>Input:</b>
2
3 3
AbC
Abc
aBC
3 2
abc
AbC
<b>Output:</b>
5
6

</pre>### Explanation
The first test case is explained in the problem statement.

In the second test case we can only take two given subsets and can't find anything less.
