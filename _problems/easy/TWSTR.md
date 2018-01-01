---
category_name: easy
problem_code: TWSTR
problem_name: 'Remember the recipe'
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
problem_author: kaushik_iska
problem_tester: subra
date_added: 28-03-2012
tags:
    - easy
    - kaushik_iska
    - may12
editorial_url: 'http://discuss.codechef.com/problems/TWSTR'
time:
    view_start_date: 1336723030
    submit_start_date: 1336723030
    visible_start_date: 1336728600
    end_date: 1735669800
    current: 1493558196
layout: problem
---
All submissions for this problem are available.Chef Jessie has a lot of recipes with her **(N)**. She often remembered the starting few characters of the recipe and forgot the rest. As all the great chefs do, Jessie also numbered the recipes depending on the priority. So, given the list of recipes along with their priorities answer Jessie’s queries.

Jessie’s queries are as follows:
She gives you the first few characters of a recipe; you have to print the complete recipe with the highest priority.

**Note:**
Every recipe has a unique priority

### Input

First line contains an integer **N** - the number of recipes.
Followed by **N** strings **Si** along with an integer each **Vi**.
**Si** stands for the recipe and **Vi** for the priority.
It is followed by an integer **Q** - the number of queries.
Followed by **Q** strings **Qi**.
Each string **Si, Qi** contain only lowercase Latin alphabets ('a' - 'z') and **'-'**.

### Output

**Q** – lines, each contain the answer for each of the query.
If for a query no recipe matches print **"NO"**. (Without quotes)

**Constraints:**

0 <= **N** <= 1000
0 <= **Q** <= 1000
-10^9 <= **Vi** <= 10^9
1 <= **|Si|** <= 1000 (length of **Si**)
1 <= **|Qi|** <= 1000 (length of **Qi**)

### Example

<pre>
<b>Input:</b>
4
flour-with-eggs 100
chicken-ham -10
flour-without-eggs 200
fish-with-pepper 1100
6
f
flour-with
flour-with-
c
fl
chik

<b>Output:</b>
fish-with-pepper
flour-without-eggs
flour-with-eggs
chicken-ham
flour-without-eggs
NO


</pre>