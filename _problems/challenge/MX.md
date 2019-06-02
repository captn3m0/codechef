---
category_name: challenge
problem_code: MX
problem_name: 'Sorting device'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - kotlin
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 15-01-2010
tags:
    - admin
time:
    view_start_date: 1265893919
    submit_start_date: 1265893919
    visible_start_date: 1265893919
    end_date: 1735669800
    current: 1525199668
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You work for a large company, and your job is to design sorting devices. Devices are built from:

- n inputs,
- n outputs,
- gates which have two inputs and send to output the minimum ("min gates") or maximum ("max gates") of the two numbers given at their input,
- connecting wires.

You are competing in a bid for a Bytelandian Ministry of Information contract to design the smallest possible device (in terms of the number of gates) which sorts any input. Each device will go through a rigorous test process on a number of data sets. However, through some Good Friends in High Places you have managed to acquire some additional information concerning the exact data sets (permutations) your device will be tested on. Make use of this, and of course your superior programming skills, to win the bid!

### Input

First, two numbers, 2≤n≤20, 1≤k≤1000, the number of inputs and the number of different permutations for which your device will be tested. The next k lines contain permutations of the numbers 1 .. n.

### Output

First, output p, the number of gates in your device (0≤p≤106). The next p lines should contain definitions of the gates used, in the form of a pair of integers, xi,yi, and exactly one of the strings "min" or "max". To be able to use the output of a gate as the input of a subsequent gate, we use the following convention. First of all, the range for inputs xi and yi is as follows: 1 ≤ xi,yi < n+p. The output of the i-th gate is assumed to be input n+i.

Finally, a sequence of exactly n integers in the range 1..n+p should follow, describing which of the "inputs" should be hard-wired to successive outputs of the device.

### Scoring

If your program does not produce a sorting machine which works for every input (sorting it in ascending order), it will be deemed incorrect. Otherwise, you will score p penalty points for each test case solved.

### Example

<pre><strong>Input:</strong><br></br>3 2<br></br>1 2 3<br></br>1 3 2<br></br><br></br><strong>Output:</strong><br></br>2<br></br>2 3 min<br></br>2 3 max<br></br>1 4 5<br></br><br></br><strong>Score:</strong><br></br> 0.5
</pre>