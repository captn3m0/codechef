---
category_name: easy
problem_code: ADIGIT
problem_name: 'Chef and Digits'
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
problem_author: berezin
problem_tester: shiplu
date_added: 20-02-2014
tags:
    - ad
    - april14
    - berezin
    - easy
editorial_url: 'http://discuss.codechef.com/problems/ADIGIT'
time:
    view_start_date: 1397467741
    submit_start_date: 1397467741
    visible_start_date: 1397467741
    end_date: 1735669800
    current: 1493558102
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL14/mandarin/ADIGIT.pdf) and [Russian](http://www.codechef.com/download/translated/APRIL14/russian/ADIGIT.pdf).

 Yesterday Chef had a great party and doesn't remember the way he celebreated it. But he found a strange paper in his kitchen containing **n** digits (lets give them indices from **1** to **n** and name them **a1**, **a2** ... **aN**).

 Chef remembers that he played such game:

- On each step he choose an index **x** from **1** to **n**.
- For all indices **y (y < x)** he calculated the difference **by** = **ax** - **ay**.
- Then he calculated **B1** - sum of all **by** which are greater than  and **B2** - sum of all **by** which are less than .
- The answer for this step is **B1 - B2**.

Chef remembers the game, but forgot the answer. Please, help him!

### Input

- The first line contains two integers **n, m** denoting the number of digits and number of steps. The second line contains **n** digits (without spaces) **a1**, **a2**, ..., **an**.
- Each of next **m** lines contains single integer **x** denoting the index for current step.

### Output

- For each of **m** steps print single number in a line - answer of the step.

### Constraints

- **1** ≤ **n, m** ≤ **10^5**
- ≤ **ai** ≤ **9**
- **1** ≤ **x** ≤ **n**

### Example

<pre><b>Input:</b>
10 3
0324152397
1
4
7

<b>Output:</b>
0
7
9


</pre><pre>
<p> </p>
<h3>Explanation</h3>
<p>For index <b>1</b> there are no indexes which are less, so <b>B1 = B2 = 0</b> and the answer is <b>0</b>.</p>
<p>For index <b>4</b> we have 

<b>b<sub>1</sub> = 4-0=4</b>, 
<b>b<sub>2</sub> = 4-3=1</b>, 
<b>b<sub>3</sub> = 4-2=2</b>, 

so <b>B1 = 4+1+2 = 7</b>, <b>B2 = 0 </b>
and the answer is <b>7</b>.</p>
<p>For index <b>7</b> we have

<b>b<sub>1</sub> = 2-0=2</b>, 
<b>b<sub>2</sub> = 2-3=-1</b>, 
<b>b<sub>3</sub> = 2-2=0</b>, 
<b>b<sub>4</sub> = 2-4=-2</b>, 
<b>b<sub>5</sub> = 2-1=1</b>, 
<b>b<sub>6</sub> = 2-5=-3</b>, 

so <b>B1 = 2 + 1 = 3</b>,
     <b>B2 = -1 -2 -3 = -6</b> 
and the answer is <b>9</b>.</p>

</pre>