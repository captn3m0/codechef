---
category_name: easy
problem_code: ANUDTC
problem_name: 'Divide the Cake'
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
problem_author: anudeep2011
problem_tester: gerald
date_added: 13-04-2014
tags:
    - ad
    - anudeep2011
    - cakewalk
    - cook46
editorial_url: 'http://discuss.codechef.com/problems/ANUDTC'
time:
    view_start_date: 1400437800
    submit_start_date: 1400437800
    visible_start_date: 1400437800
    end_date: 1735669800
    current: 1493558106
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK46/mandarin/ANUDTC.pdf) and [Russian](http://www.codechef.com/download/translated/COOK46/russian/ANUDTC.pdf) as well.

### Problem description

Chef loves circular cakes. He divides them into smaller pieces and sells them. You are to help him in this work.

Today Chef has cooked the brand new circular cake. To split the cake Chef can make several (possibly, zero) cuts. Each cut should be a straight line going from the center of the cake to its border. Also, the angle between any two cuts should have positive integer value (Chef measure all the angles in degrees). Chef consider two pieces of cake equal if the appropriate angles are equal.

![](http://codechef.com/download/Sector_central_angle_arc.svg)
/>

The picture contains two distinct pieces, and two cuts. Red part on the image shows one piece. The appropriate angle is **AOB**.

Chef gives to you an integer **N**, denoting the number of pieces Chef wants to make. You need to answer the following questions:

- Is it possible to make exactly **N** equal pieces from the whole cake?
- Is it possible to make exactly **N** pieces from the whole cake?
- Is it possible to make exactly **N** pieces from the whole cake, in such a way that no two of them are equal?


/>

### Input

First line contains a single integer **T** denoting the number of test cases. Each of the following **T** lines contain a single integer **N** denoting the number of pieces Chef wants to make.

### Output

For each test case, output one line containing 3 space separated characters.
Above, we defined the 3 questions that Chef will ask. Output **'y'** for yes or **'n'** for no (quotes for clarity) for each of those questions.
Answers for 3 questions (in the order above) must be space separated on the same line.

### Constraints

- **1** ≤ **T** ≤ **10000**
- **1** ≤ **N** ≤ **10000**

### Example

<pre><b>Input:</b>
2
4
7

<b>Output:</b>
y y y
n y y

</pre>### Explanation
**Example case 1.**

Is it possible to make **N** equal pieces?

Yes, you can cut 4 pieces each with 90 degrees angle.

Is it possible to make **N** pieces?

Yes, you can cut 4 pieces each with 90 degrees angle.

Is it possible to make **N** pieces, such that no two of them are equal?

Yes, you can cut 4 pieces with angles 88, 89, 91, 92.
/>/>/>/>/>/>/>
