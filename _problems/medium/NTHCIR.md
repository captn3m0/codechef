---
category_name: medium
problem_code: NTHCIR
problem_name: 'Rohith and Circles'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: adurysk
problem_tester: mugurelionut
date_added: 16-04-2015
tags:
    - adurysk
    - geometry
    - july15
    - maths
    - medium
    - recurrence
editorial_url: 'http://discuss.codechef.com/problems/NTHCIR'
time:
    view_start_date: 1436779800
    submit_start_date: 1436779800
    visible_start_date: 1436779800
    end_date: 1735669800
    current: 1493557822
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/JULY15/mandarin/NTHCIR.pdf) and [Russian](http://www.codechef.com/download/translated/JULY15/russian/NTHCIR.pdf).

 Chef has a friend named Rohith who is very good at geometry. One day Chef came across an interesting problem on the topic of circles and shared it with Rohith.

 Next day Rohith also came up to chef with a problem he just created. When our chef couldn't solve it thinking that it uses some advanced geometry, Rohith took the pleasure saying that the solution of this problem uses exactly the same concept which was used to solve the problem that they have discussed the day before. This came as a shock to our chef and he became desperate to solve this problem, but even as he tried a lot, he couldn't solve it. Rohith doesn't want to share his solution, so can you help our chef in solving the problem?

Take a deep breath! You are going to draw a lot of circles.

 The problem goes like this:

- First draw a circle of radius **R**1 on a sheet of paper, let us call it **C**1.
- Draw another circle of radius **R2** touching the circle **C**1 from the inside (it is given that **R**2 ≤ **R**1), let's call this circle as **C**2.
- Draw another circle of radius **R3** such that it touches the circle **C**1 from inside and the circle **C**2 from outside (it is given that **R**3 + **R**2 ≤ **R**1), let's call this circle as **C**3.
- Draw another circle of radius **R4** which will touch the circles **C**2 and **C**3 externally and the circle **C1** internally, let's call it as **C**4. It is guaranteed that such a set of circles can be drawn.
After drawing the four circles, the figure may look something like this:

![](http://www.codechef.com/download/JULY15/NTHCIR1.png)

- Now try to draw a circle **C5** which will touch the circles **C**2 and **C**4 externally and the circle **C**1 internally. Note that circles **C**5 and **C**3 are not the same (see the picture below for more clarification). Let its radius be **R**5
- Now try to draw a circle **C**6 which will touch the circles **C**2 and **C**5 externally and the circle **C**1 internally. Let its radius be **C**6.
- And so on, like this, draw **N** circles such that the circle **C**N will touch circles **C**2, **C**N - 1 externally and the circle **C**1 internally. Let its radius be **RN**

After drawing all the circles the figure may look like this

![](http://www.codechef.com/download/JULY15/NTHCIR2.png)

You are given **N**, **R**1, **R**2, **R**3 and **R**4, you need to find the radius of the circle **C**N, i.e, **R**N.

You are given four integers **N**0, **P**, **M**, **B**. There are **T** test cases in total. Test cases are numbered from 1 to **T**. The value of **N** for the **t**th test case, i.e, **N**t = (**P** \* **N**t - 1) % **M** + **B**. The values of **R**1, **R**2, **R**3 and **R**4 remain constant over all the test cases.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The next line contains four integers **N**0, **P**, **M** and **B** separated by a single space.

The next line contains four real valued numbers **R**1, **R**2, **R**3 and **R**4 separated by a single space.

### Output

As the number of test cases can be huge, you need to output a single line containing the sum of values of **R****N** over all test cases exactly up to 6 decimal places.

### Constraints and Subtasks

**Subtask 1: 25 points**

- **1** ≤ **T** ≤ **103**
- **1** ≤ **R**i ≤ **103**
- **1** ≤ **N**0, **P, M, B** ≤ **103**

**Subtask 2: 75 points**

- **1** ≤ **T** ≤ **107**
- **1** ≤ **R**i ≤ **1012**
- **1** ≤ **N**0, **P, M, B** ≤ **109**

### Example

<pre>
<b>Input:</b>
1
1 2 1 5
6 3 3 2

<b>Output:</b>
1.000000

<h3>Explanation</h3>
<p>After drawing 5 circles the figure looks like this.</p>
<img height="245" src="http://www.codechef.com/download/JULY15/NTHCIR3.png" width="250"></img>
The radius of the circle <b>C</b><sub>5</sub> here is <b>R</b><sub>5</sub> = 1.
</pre>