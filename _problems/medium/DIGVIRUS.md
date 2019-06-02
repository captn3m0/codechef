---
category_name: medium
problem_code: DIGVIRUS
problem_name: 'Bear and Digit Virus'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: errichto
problem_tester: lg5293
date_added: 29-04-2017
tags:
    - ad
    - bfs
    - errichto
    - ltime47
    - medium
time:
    view_start_date: 1493485200
    submit_start_date: 1493485200
    visible_start_date: 1493485200
    end_date: 1735669800
    current: 1497284435
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME47/mandarin/DIGVIRUS.pdf), [Russian](http://www.codechef.com/download/translated/LTIME47/russian/DIGVIRUS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME47/vietnamese/DIGVIRUS.pdf) as well.

There are 10 types of viruses — one type with strength 0, one type with strength 1, and so on, up to the last type with strength 9.

Limak examines the behavior of a row of N viruses, indexed 1 through N. The initial situation is represented by a string **S** that consists of N digits, denoting the strengths of the viruses.

Stronger viruses will slowly defeat the weaker ones and convert them into their own type. While it's easy for a very strong virus to defeat a very weak one, the distance between them is an obstacle. Formally, we say that a virus with index x affects (tries to attack) a virus with index y (1 ≤ x, y ≤ N) if and only if:

strength(x) - strength(y) ≥ |x - y|

For example, a virus with strength 8 affects a virus with strength 5 if and only if the distance between them (the absolute difference between indices) is at most 3. Also, a virus always affects itself. Note that a virus can never affect stronger viruses.

In one second, simultaneously, each virus V is replaced with a virus whose type is the strongest among all the viruses that were affecting V at that moment.

Limak wants to know when this process will stop, i.e. when all N viruses will have the same type. It can be proved that such a situation must happen eventually. Can you help Limak and compute the number of seconds after which the process will stop?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The only line of each test case contains one string **S**, consisting of digits '0' through '9'. We have let N denote the length of **S**.

### Output

For each test case, output a single line containing one integer — the number of seconds the process will last (after which all N viruses will have the same type).

### Constraints

- 1 ≤ **T** ≤ 3
- 1 ≤ N ≤ 150,000

### Subtasks

- Subtask #1 (20 points): 1 ≤ **N** ≤ 50
- Subtask #2 (30 points): It's guaranteed that the answer won't exceed 10.
- Subtask #3 (10 points): **S** contains digits '0' and '1' only.
- Subtask #4 (40 points): Original constraints.

### Example

<pre><b>Input:</b>
3
555755555
311110000000000
07788000744

<b>Output:</b>
3
6
4
</pre>
### Explanation

**Test case 1.** In the string 555755555, the virus with index 4 (the one with strength 7) affects two viruses to the left, and two viruses to the right, i.e. viruses with indices 2, 3, 5 and 6. These four viruses will be changed to strength 7 after the first second. The new string will be 577777555.

In the next second, viruses with indices 1, 7 and 8 will be changed, and the string will become 777777775.

Finally, in the third second, the last virus will be changed to strength 7 as well. The process stops after 3 seconds in total.

**Test case 2.** The string changes in the following way:

- 311110000000000 initially
- 333111000000000 after 1 second
- 333331100000000 after 2 seconds
- 333333330000000 after 3 seconds
- 333333333330000 after 4 seconds
- 333333333333330 after 5 seconds
- 333333333333333 after 6 seconds

**Test case 3.** The string changes in the following way:

- 07788000744 initially
- 87888888777 after 1 second
- 88888888877 after 2 seconds
- 88888888887 after 3 seconds
- 88888888888 after 4 seconds
