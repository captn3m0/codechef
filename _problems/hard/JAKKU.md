---
category_name: hard
problem_code: JAKKU
problem_name: 'Rebel rescue'
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
problem_author: utkarsh_lath
problem_tester: null
date_added: 18-12-2016
tags:
    - utkarsh_lath
time:
    view_start_date: 1487496600
    submit_start_date: 1487496600
    visible_start_date: 1487496600
    end_date: 1735669800
    current: 1493556738
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB17/mandarin/JAKKU.pdf), [Russian](http://www.codechef.com/download/translated/FEB17/russian/JAKKU.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB17/vietnamese/JAKKU.pdf) as well.

Government is surveilling the entire planet in search of black money, and now there are **N** satellites orbiting Earth. Each satellite has sensors to detect black money transaction on the visible half of the planet. For example, when a satellite is passing over north pole, it's sensors can detect any transaction in the northern hemisphere. This surveillance has become a real pain point for some businessmen, as the satellite sensors are really good. A powerful businessman wants to conduct a big black money transaction somewhere on the planet surface. To do this, he must first sabotage all satellites which would be able to detect the transaction. The businessman can choose any place and time for the transaction, as long as it is on the planet surface. Please help him by finding the minimum number of satellites that must be sabotaged so that the transaction goes undetected. He has promised you a small fraction of the money (in old currency) as a reward for your services.

&lt;object data="https://s3.amazonaws.com/codechef\_shared/download/upload/FEB17/SC.svg" type="image/svg+xml" height="350"&gt; &lt;/object&gt; &lt;object data="https://s3.amazonaws.com/codechef\_shared/download/upload/FEB17/T2.svg" type="image/svg+xml" height="350"&gt; &lt;/object&gt;

The **ith** satellite orbits along longitude **li**, and at time t=0, is in phase **pi**. Phase of an orbiting body is *the angle between north pole, planet center and the orbiting body*. If phase **pi** is less than 180 degree, the body lies on longitude **li** somewhere between north pole and south pole. If phase is more than 180 degree, the body lies on longitude **li-180** somewhere between south pole and north pole.

**Extra Explanation:** Note that the formulation of longitude and phase is slightly different from the system of longitudes and latitudes we use to denote points on earth's surface. It is closer to Spherical coordinate system, but we have constrained the azimuth angle (**li** in the figure above) to be between 0 and 180, so the azimuth angle of an orbiting satellite does not change, and polar angle can be anywhere between 0 and 360. At time **t**, the **ith** satellite is located at **x = sin(pi + t) \* cos(li), y = sin(pi + t) \* sin(li), z = cos(pi + t)**.

**Assumptions to be made:**

- The transaction takes place on a place which has arbitrarily small(but non zero) area.
- The transaction lasts for arbitrarily short(but non zero) duration.
- All satellites have circular orbit which is very far away from the planet’s surface.
- All satellites orbit at the same distance and the same speed.
- All angles are in degrees.
- The geometric center of the Planet is same as its center of mass.
- No special or general relativistic effects.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the number of satellites. The next **N** lines contain two space separated integers each, **pi** and **li**.

### Output

For each test case, output a single line containing the minimum number of satellites that must be sabotaged to conduct a successful transaction.

### Constraints:

- 1 ≤ **T** ≤ 10
- 3 ≤ **N** ≤ 50
- 0 ≤ **li** ≤ 179
- 0 ≤ **pi** ≤ 359
- All **li** are distinct.
- All **pi** are distinct modulo 180.

### Example

<pre>
<b>Input:</b>
2
3
10 90
310 30
305 150
3
10 90
230 30
125 35

<b>Output:</b>
0
0
</pre>
### Sub tasks

- Sub task #1: N = 3 (10 points)
- Sub task #2: N ≤ 20 (30 points)
- Sub task #3: N ≤ 50 (60 points)

### Explanation

**Example case 1**: The businessman can do transaction at time t=0, at longitude 90, and phi 230 (90W, 40S), where no orbiting satellite can see them, so he does not need to sabotage any of them.

**Example case 2**: The businessman can do transaction at time t=160 (after all satellites have complete 160 degrees of rotation), at longitude 125, and phi 267 (55W, 3S). No satellite has to be sabotaged in this case either.
