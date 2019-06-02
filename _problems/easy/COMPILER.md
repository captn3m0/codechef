---
category_name: easy
problem_code: COMPILER
problem_name: 'Compilers and parsers'
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
problem_author: kuruma
problem_tester: xcwgf666
date_added: 21-01-2014
tags:
    - ad
    - easy
    - kuruma
    - may14
editorial_url: 'http://discuss.codechef.com/problems/COMPILER'
time:
    view_start_date: 1399887000
    submit_start_date: 1399887000
    visible_start_date: 1399887000
    end_date: 1735669800
    current: 1493558132
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/MAY14/mandarin/COMPILER.pdf) and [Russian](http://www.codechef.com/download/translated/MAY14/russian/COMPILER.pdf).

Lira is now very keen on compiler development. :)

She knows that one of the most important components of a compiler, is its parser.

A parser is, in simple terms, a software component that processes text, and checks it's semantic correctness, or, if you prefer, if the text is properly built.

As an example, in declaring and initializing an integer, in C/C++, you can't do something like:

 int = x ;4

as the semantics of such statement is incorrect, as we all know that the datatype must precede an identifier and only afterwards should come the equal sign and the initialization value, so, the corrected statement should be:

 int x = 4;

Today, Lira is concerned with an abstract instruction which is composed of the characters "<" and ">" , which she will use on the design of her language, L++ :D.

She is using it as an abstraction for generating XML code Tags in an easier fashion and she understood that, for an expression to be valid, a "<" symbol must always have a corresponding ">" character somewhere (not necessary immediately) after it. Moreover, each ">" symbol should correspond to exactly one "<" symbol.

So, for instance, the instructions:

  **<<>>**

 **<>**

 **<><>**

are all valid. While:

 **>>**

 **><><**

are not.

Given some expressions which represent some instructions to be analyzed by Lira's compiler, you should tell the length of the longest prefix of each of these expressions that is valid, or 0 if there's no such a prefix.

### Input

Input will consist of an integer **T** denoting the number of test cases to follow.

Then, **T** strings follow, each on a single line, representing a possible expression in L++.

### Output

For each expression you should output the length of the longest prefix that is valid or 0 if there's no such a prefix.

### Constraints

27. **1** ≤ **T** ≤ **500**
28. **1** ≤ **The length of a single expression** ≤ **106**
29. The total size all the input expressions is no more than **5\*106**
### Example

<pre><b>Input:</b>
3
<<>>
><
<>>>
<b>Output:</b>
4
0
2

</pre>