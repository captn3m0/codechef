---
category_name: medium
problem_code: WALL
problem_name: Wall
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: kostya_by
problem_tester: stzgd
date_added: 27-07-2014
tags:
    - easy
    - geometry
    - kostya_by
    - ltime15
    - number
editorial_url: 'http://discuss.codechef.com/problems/WALL'
time:
    view_start_date: 1409473800
    submit_start_date: 1409473800
    visible_start_date: 1409473800
    end_date: 1735669800
    current: 1493557953
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME15/mandarin/WALL1.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME15/russian/WALL.pdf).

_The Wall is a massive wall over 700 feet high and is made of ice, stretching 300 miles across the northern border of the Seven Kingdoms, separating it from the wild lands beyond. Appearing as one of the nine Wonders Made by Man in the book by Lomas Longstrider, the Wall is defended and held by the Sworn Brothers of the Night's Watch, who patrol and guard the castles from the Frostfangs mountain range in the west to the Bay of Seals in the east._

(c) A Wiki of Ice and Fire

![](/download/extimages/b376086dc238b3d2ca4bb78865b0744f.jpg)

Winter is coming. The army of White Walkers is heading to the south. The Wall is the only obstacle, that protects the people of the Seven Kingdoms from the danger.

In this problem we assume, that the Wall can be described as a rectangle **R** on the Cartesian plane. The corner points of **R** are (0, 0), (0, **H**), (**W**, **H**) and (**W**, 0).

In order to reinforce the Wall, the brothers of the Night's Watch have placed a huge simple polygonal chain **P** made of the purest valyrian steel on the wall. **P** can be desribed as following:

- **P** consists of **N** points, both coordinates of which are integers;
- The points are indexed with integers from 0 to **N - 1**;
- X-coordinate of **i**'th point of **P** equals to **Xi**;
- Y-coordinate of **i**'th point of **P** equals to:

- 0, if **i** is even;
- **H**, if **i** is odd.

11. **X0** equals to 0;
12. **Xi** < **Xi + 1** for **0 ≤ i < N - 1**;
13. **XN - 1** equals to **W**.
Your task is pretty simple: calculate the area of **R**, which is lying under **P**.

Let's consider a small example for your better understanding:

 Let's define **H** = 4, **W** = 6, **N** = 3, **X0** = 0, **X1** = 5, **X2** = 6.

![](/download/extimages/8afe60b8b5215f6156b51ce786e23a3a.jpg)

In this testcase we are interested in caculating the area of the green triangle.

**N** can be extremely huge in this problem, so it's impossible to give you array **X** itself. Instead of this, we will provide some additional variables and arrays, with a help of which you will be able to generate array **X** inside your program.

We will use additional integer variables **M**, **A**, **B** and **IND**. Also, additional array **D**, which consists of **M** integers and is indexed with integers from 0 to **M - 1** will be used.

Here's a pseudocode, which generates array **X**:

```

X[0] = 0
for i from 1 to N - 1:
begin
      X[i] = X[i - 1] + D[IND]
      IND = (A * IND + B) % M
end

```### Note

Maybe, some of you aren't familiar with definitions from the statement. Here're some articles that could help you to understand the problem correctly:

- Cartesian plane: [http://en.wikipedia.org/wiki/Cartesian\_plane](http://en.wikipedia.org/wiki/Cartesian_plane)
- Polygonal chain: [http://en.wikipedia.org/wiki/Polygonal\_chain](http://en.wikipedia.org/wiki/Polygonal_chain)

### Input

The first line of the input contains an integer **T**, denoting the number of testcases. The description of **T** testcases follows.

The first line of each testcase contains an integer **H**, denoting the height of **R**.

The second line contains two integer **N** and **M**, denoting the number of points in **P** and an additional variable.

The third line contains three integers **A**, **B** and **IND**, denoting additional variables.

The fourth line contains **M** integers, **i**'th one denotes **Di - 1**.

**Note:** **W** is not provided in the input, but according to the legend it equals to **XN - 1**.

### Output

For each test case the only line of the output should contain the only float: the area of **R**, which is lying under **P**.

**IMPORTANT:** the result should be printed out with **exactly** one digit after the decimal point. Ignoring of that requirement may lead correct solutions to the WA verdict.

Also, do not add any newlines between different testcases.

### Constraints

- 1 ≤ **T** ≤ 6, for each input file;
- 1 ≤ **H** ≤ 100000;
- 0 ≤ **A**, **B**, **IND** < **M**;
- 1 ≤ **Di** < 104;
- Subtask 1(34 points): 2 ≤ **N** ≤ 524288, 1 ≤ **M** ≤ 524288;
- Subtask 2(33 points): 2 ≤ **N** ≤ 1000000000, 1 ≤ **M** ≤ 256;
- Subtask 3(33 points): 2 ≤ **N** ≤ 1000000000, 1 ≤ **M** ≤ 524288.

### Example

```
<b>Input:</b>
2
5
2 2
0 1 0
10 10
10
10 5
2 3 4
2 5 1 1 4

<b>Output:</b>
25.0
140.0

```