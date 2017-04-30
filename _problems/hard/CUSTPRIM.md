---
category_name: hard
problem_code: CUSTPRIM
problem_name: 'Payton numbers'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: kevinsogo
problem_tester: pushkarmishra
date_added: 5-12-2014
tags:
    - advanced
    - feb15
    - hard
    - kevinsogo
editorial_url: 'http://discuss.codechef.com/problems/CUSTPRIM'
time:
    view_start_date: 1424079000
    submit_start_date: 1424079000
    visible_start_date: 1424079000
    end_date: 1735669800
    current: 1493556676
layout: problem
---
All submissions for this problem are available.Payton likes numbers, but all the numbers he has ever known are the ordinary integers, and he doesn't like it. Thus he created his own set of “numbers”, which he called **Payton numbers**.

Each Payton number is a triplet of ordinary integers **(a,b,c)**, with the restriction that **c** is either **11** or **24** (because Payton likes **11** and **24**). And then, Payton defines the **product** of two Payton numbers **(a1,b1,c1)** and **(a2,b2,c2)** as the following:

```
def multiply((a<sub>1</sub>,b<sub>1</sub>,c<sub>1</sub>), (a<sub>2</sub>,b<sub>2</sub>,c<sub>2</sub>)):

    s = (a<sub>1</sub>a<sub>2</sub> + b<sub>1</sub>b<sub>2</sub> + c<sub>1</sub>c<sub>2</sub>) + (a<sub>1</sub>b<sub>2</sub> + b<sub>1</sub>a<sub>2</sub>) + (c<sub>1</sub> + c<sub>2</sub>)
    t = floor[s/2] + 16(c<sub>1</sub> + c<sub>2</sub>) - c<sub>1</sub>c<sub>2</sub>
    A = (t - 2(a<sub>1</sub>b<sub>2</sub> + b<sub>1</sub>a<sub>2</sub>) - (a<sub>1</sub>c<sub>2</sub> + c<sub>1</sub>a<sub>2</sub>) + 33(a<sub>1</sub> + a<sub>2</sub>)
           + (b<sub>1</sub>b<sub>2</sub> - a<sub>1</sub>a<sub>2</sub>))
    B = (t - 5(a<sub>1</sub>b<sub>2</sub> + b<sub>1</sub>a<sub>2</sub>) - (c<sub>1</sub>b<sub>2</sub> + b<sub>1</sub>c<sub>2</sub>) + 33(b<sub>1</sub> + b<sub>2</sub>)
           + (2b<sub>1</sub>b<sub>2</sub> + 4a<sub>1</sub>a<sub>2</sub>))

    if s is even:
        return (A-540,B-540,24)
    else:
        return (A-533,B-533,11)

```Eventually, Payton found out that he can define many interesting things about his numbers:

A **zero** is a Payton number **z** whose product with any other Payton number is **z**. Payton proved that there is a unique zero in Payton numbers, namely **(11,11,11)**.

A **unity** is a Payton number whose product with any other Payton number is that Payton number. Payton proved that there is a unique unity in Payton numbers, namely **(4,4,24)**.

A Payton number **x** **divides** another Payton number **y** if there exists a Payton number **z** such that **x·z = y**.

A Payton number is a **unit** if it divides a unity. Payton proved that any unity is also a unit, therefore **(4,4,24)** is a unit. But it's possible that there are other units.

A Payton number is **prime** if it isn't a zero, isn't a unit, and can't be written as the product of two nonzero, non-unit Payton numbers.

Given a Payton number, Payton wants to determine whether it is prime or not. Please help him, so that he can start replacing all numbers in math with Payton numbers!

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

Each test case consists of one line which contains three integers, **a**, **b** and **c**, representing the Payton number **(a,b,c)**.

### Output

For each test case, output a single line containing a word: “PRIME” if the Payton number is a prime, and “NOT PRIME” otherwise.

### Constraints

- **1** ≤ **T** ≤ **104**
- **c** is either **11** or **24**

### Subtasks

- Subtask #1: (30 points) **-104** ≤ **a**, **b** ≤ **104**
- Subtask #2: (70 points) **-107** ≤ **a**, **b** ≤ **107**

### Example

```
<b>Input:</b>
```
4
11 11 11
4 4 24
-104 126 11
4 5 24
```

<b>Output:</b>
```
NOT PRIME
NOT PRIME
NOT PRIME
PRIME

```

```
### Explanation

**Example case 1.** The number **(11,11,11)** is a zero, so it's not prime.

**Example case 2.** The number **(4,4,24)** is a unit, so it's not prime.

**Example case 3.** The number **(-104,126,11)** is not a prime, since it is the product of two nonzero non-units **(13,26,24)** and **(4,-8,11)**.

**Example case 4.** It can be shown that the number **(4,5,24)** isn't a zero, isn't a unit, and cannot be factored into two nonzero non-units. Therefore it is prime.