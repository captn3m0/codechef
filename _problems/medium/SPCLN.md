---
category_name: medium
problem_code: SPCLN
problem_name: 'Cleaning the Space'
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
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: nssprogrammer
problem_tester: null
date_added: 23-05-2017
tags:
    - nssprogrammer
time:
    view_start_date: 1496516400
    submit_start_date: 1496516400
    visible_start_date: 1496516400
    end_date: 1735669800
    current: 1514816835
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKEL17/mandarin/SPCLN.pdf), [Russian](http://www.codechef.com/download/translated/SNCKEL17/russian/SPCLN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKEL17/vietnamese/SPCLN.pdf) as well.

A spacecraft is all set to travel through a long inter-galactic tunnel. The tunnel consists of **N** stationary space debris. In order to successfully complete the mission the spacecraft needs to destroy all the space debris. The control unit of the spacecraft has **M** buttons which can be used to destroy the space debris. Pressing a particular button may result in the destruction of some (possibly multiple) particular space debris. Once a space debris is destroyed its mass is converted into energy, which is eventually absorbed by the spacecraft in order to increase its speed. The amount of energy released from the disintegration of a particular space debris depends upon the button which has been used to destroy that space debris. A matrix **E** which contains this information is known as "Energy Vector". For each space debris i and each button j, **E\[i\]\[j\]** is a positive integer between 0 and 100, which is the energy released after destroying space debris i using button j. The value of **E\[i\]\[j\]** is -1 if space debris i cannot be destroyed using button j.

Some space debris have dependencies on other space debris in order to get destroyed. The spacecraft must destroy some specific space debris before causing the destruction of some other space debris. There are a total of **K** unique dependencies. Each dependency contains two space separated integers i and j, which denotes that the space debris i must be destroyed before destroying space debris j.

 A particular button can be pressed only once and the buttons can be pressed only in order from 1 to **M** (ie. button 2 cannot be pressed before button 1 ). While pressing a specific button a binary string **T** of length N called as "Target Vector" is passed to the control unit of the spacecraft. For each space debris i, **T\[i\]** is 1 if you want to destroy that space debris with that button otherwiseT\[i\] is 0. When the button is pressed all the space debris mentioned in the Target Vector simultaneously gets destroyed.

The spacecraft may destroy any number of space debris using a particular button, including none, as long as they can be destroyed by that button and the spacecraft has already destroyed any required prerequisite space debris.

Now the task is to compute the maximum average energy that can be absorbed by the spacecraft throughout the entire mission.

### Input

- The first line of the input contains two space separated integers **N** and **M**.
- **N** lines follow, each containing **M** integers. The jth integer of the ith line represents the value of **E\[i\]\[j\]**.
- The next line contains an integer **K**.
- This is followed by **K** lines, each containing two space separated integers **u** and **v**, where **u** is never equal to **v**. it means that space debris **u** should be destroyed before space debris **v**

### Output

print a single real number which is the maximum average energy, rounded to two digits after the decimal point. ### Constraints

- 1 ≤ **M, N** ≤ 100
- 0 ≤ **K** ≤ 100
- -1 ≤ **E\[i\]\[j\]** ≤ 100
- 1 ≤ **u, v** ≤ **N**
- It is guaranteed that there always exists a way to destroy **N** space debris using **M** buttons

### Example

<pre><b>Input:</b>
3 3 
10 70 100 
80 50 40 
80 20 40 
2 
1 2 
1 3 

<b>Output:</b>
50.00

</pre>### Explanation
One way the spacecraft can destroy the space debris is :

Destroy the first space debris by pressing the second button.

Destroy the second and third space debris using the third button.

The average energy is (70 + 40 + 40)/3 = 50.00, and this is optimal.
