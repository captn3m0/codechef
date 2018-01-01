---
category_name: easy
problem_code: DIVIDING
problem_name: 'Dividing Stamps'
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
problem_author: kostya_by
problem_tester: gerald
date_added: 24-02-2014
tags:
    - cakewalk
    - cook44
    - kostya_by
    - simple
editorial_url: 'http://discuss.codechef.com/problems/DIVIDING'
time:
    view_start_date: 1395599400
    submit_start_date: 1395599400
    visible_start_date: 1395599400
    end_date: 1735669800
    current: 1493558139
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DIVIDING/mandarin/DIVIDING.pdf) and [Russian](http://www.codechef.com/download/translated/DIVIDING/russian/DIVIDING.pdf) as well.

Are you fond of collecting some kind of stuff? Mike is crazy about collecting stamps. He is an active member of _Stamp Collecting Сommunity_(SCC).

SCC consists of **N** members which are fond of philately. A few days ago Mike argued with the others from SCC. Mike told them that all stamps of the members could be divided in such a way that **i**'th member would get **i** postage stamps. Now Mike wants to know if he was right. The next SCC meeting is tomorrow. Mike still has no answer.

So, help Mike! There are **N** members in the SCC, **i**'th member has **Ci** stamps in his collection. Your task is to determine if it is possible to redistribute **C1** + **C2** + ... + **Cn** stamps among the members of SCC thus that **i**'th member would get **i** stamps.

### Input

The first line contains one integer **N**, denoting the number of members of SCC.

The second line contains **N** integers **Ci**, denoting the numbers of the stamps in the collection of **i**'th member.

### Output

The first line should contain **YES**, if we can obtain the required division, otherwise **NO**.

### Constraints

1 ≤ **N** ≤ 100 000;

1 ≤ **Ci** ≤ 109.

### Examples

<pre><b>Input:</b>
5
7 4 1 1 2

<b>Output:</b>
YES

</pre><pre><b>Input:</b>
5
1 1 1 1 1

<b>Output:</b>
NO

</pre>