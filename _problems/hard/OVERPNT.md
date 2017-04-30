---
category_name: hard
problem_code: OVERPNT
problem_name: 'Bear and Oveflow Points'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: errichto
problem_tester: errichto
date_added: 23-02-2017
tags:
    - errichto
    - ltime45
    - medium
editorial_url: 'https://discuss.codechef.com/problems/OVERPNT'
time:
    view_start_date: 1488042300
    submit_start_date: 1488042300
    visible_start_date: 1488042300
    end_date: 1735669800
    current: 1493556787
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME45/mandarin/OVERPNT
.pdf), [Russian](http://www.codechef.com/download/translated/LTIME45/russian/OVERPNT
.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME45/vietnamese/OVERPNT
.pdf) as well.

In competitive programming, one of the common mistakes is using a variable type that stores too few bits, which leads to overflows and underflows. We will focus on the "unsigned int" type, which makes all calculations modulo 232, always giving a non-negative result between 0 and 232 - 1, inclusive. Sample calculations on type "unsigned int" are:

`7 - 5 = 2,        5 - 7 = 4294967294,        5 * 1,000,000,000 = 705032704`
Limak wants to become a great coder. Right now he learns the computional geometry. He already knows that three points (ax, ay), (bx, by), (cx, cy) are collinear if and only if:

(bx - ax) \* (cy - ay) = (by - ay) \* (cx - ax)

Without thinking which type to use, Limak wrote the following C++ function:


```

	typedef unsigned int UI;
	bool areCollinear(UI ax, UI ay, UI bx, UI by, UI cx, UI cy) {
		return (bx - ax) * (cy - ay) == (by - ay) * (cx - ax);
	}

```

If you are more familiar with Python, you can assume that he wrote:

```

```

    M = 2 ** 32
    def subtract(a, b):
        ans = a - b
        if ans 

```
<br></br><p>To show Limak how important it is to watch for overflows, you must find any set of <b>N</b> distinct points that:

</p>
```
- Any three distinct points in any order would be treated as collinear by Limak's function.
- None three points are collinear (what implies that points are distinct).
- Coordinates are non-negative integers not exceeding 106.


If there are many solutions (valid sets of points), you can print any of them. There exists at least one solution for every **N** allowed by the constraints.

### Input

The only line of the input contains an integer **N** denoting the required number of points.

### Output

Print **N** lines. The i-th of them should contain two space-separated integers xi and yi, denoting coordinates of the i-th point. If there are many solutions, you can print any of them.

Remember that one of requirements is 0 ≤ xi, yi ≤ 106.

### Constraints

- 3 ≤ **N** ≤ 10

### Subtasks

- Subtask #1 (50 points) 3 ≤ **N** ≤ 5
- Subtask #2 (50 points) original constraints

### Example

```
<b>Input1:</b>
3

<b>Output2:</b>
106732 139820
210379 490375
42 483426

<b>Input2:</b>
4

<b>Output2:</b>
580981 431795
914958 554338
518360 23016
441824 483616
```
### Explanation

**Test case 1.** The provided function areCollinear() should return True for the found three points given in any order (there are 3! = 6 possible orders of 3 points). Let's analyze the evaluation of areCollinear(42, 483426, 106732, 139820, 210379, 490375):

Without any overflow errors, the calculations would be:

 (bx - ax) \* (cy - ay) = (106732 - 42) \* (490375 - 483426) = 741388810

(by - ay) \* (cx - ax) = (139820 - 483426) \* (210379 - 42) = -72273055222

And indeed numbers 741388810 and -72273055222 are equal modulo 232. Hence areCollinear would think that they are collinear.