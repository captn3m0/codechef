---
category_name: medium
problem_code: JABO
problem_name: 'Jam Board'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: 'vinayak garg'
problem_tester: laycurse
date_added: 6-09-2012
tags:
    - disjoint
    - medium
    - nov12
    - vinayak
editorial_url: 'http://discuss.codechef.com/problems/JABO'
time:
    view_start_date: 1352712600
    submit_start_date: 1352712600
    visible_start_date: 1352712600
    end_date: 1735669800
    current: 1493557919
layout: problem
---
All submissions for this problem are available.Jimmy is a very studious and obedient boy. He has recently joined Digital Circuits Course in his school. He is absolutely fascinated by digital circuits, and stays back in lab after school hours to make circuits. What interests him is plugging wires and voltage sources on Jam Board and then lighting up an LED.
A Jam Board is a large plastic board, with lots of holes in it. The holes are arranged as following-/>

- Holes in a group of 5 share a common metallic plate, i.e if one of them gets a high voltage, then all 5 of them are at "High". The group is aligned vertically.
- There are several groups placed horizontally as well as vertically, depending on the dimensions of the Jam Board.

For illustration, consider a Jam Board Having 6 Columns and 2 Rows-

<pre>
A B C D E F
A B C D E F
A B C D E F
A B <b>1</b> D E F
A B C D <b>2</b> F
G H I J K L
G H I J K L
G H I J K L
G <b>3</b> I J K L
G H I J K L

</pre>
All A's are in a group, and share same voltage. Notice the **3** above, it is basically in H group. How can we refer to the point **3** on Jam Board, using coordinate system? Candy for taking a guess! It is (2, 9), from Top Left.

Now if Jimmy plugs one end of copper wire in **1** and the other in **2**, then C and E will become a single group and start sharing voltage. Jimmy can apply a high voltage to any hole, and that group becomes "high". The Jam Board is grounded, thus each group is initially at low voltage. When an LED is connected across two points, it glows up if there is a potential difference between the two points, i.e. when one end is "high" and the other is "low".

The lab assistant must leave, but he allows Jimmy to stay with one Jam Board, one LED, one Voltage sources (with several output points) and lots of wires. So Jimmy gets down to work, he connects wires, applies (high) voltage, and occasionally connects the LED between two points. Sometimes he removes a voltage source as well. At times he connects a wire(or voltage source) to the point, which already has a wire(or voltage source) connected to it. This is not a good practice, but Jimmy is excused because he is new to electrical stuff. And when he removes voltage source from a point, he removes only one of it at a time.

Since the number of connections is rather enormous and confusing, he requires your help to tell him whether the LED will light up each time he connects it.

However Jimmy's cryptography classes have made him rather irksome. He is telling you the row or column not as a number, but in a Base-52 notation of his own. In this notation, each number is represented as 2 characters, where each character can be either A-Z or a-z.
Here A = 0, B = 1, ... Z = 25, a = 26, ... z = 51. So 1 is represented as AB, 5 is AF, 97 is Bt.
And to top that he doesn't give any gap between row number and column number, or between pair of coordinates (column and row), used to indicate the endpoints of wire. />

### Input

The first line contains 3 space separated integers, **N** (≤ 1000000), **R** (≤ 500), **C** (≤ 2500).
R is the number of rows and C is the number of columns in the Jam Board.
Then N lines follow. Each line starts with one of the following characters-/>/>

- W - It means a wire is attached in the Board. W is followed by the pair of coordinates, for the two endpoints of wire.
- V - It means a voltage is applied on the board. V is followed by the coordinate where the Voltage is applied.
- R - It means a voltage source is removed from the board. R is followed by the coordinate from where the source is removed.
- L - It means an LED is attached on the Board. L is followed by the pair of coordinates, for the two endpoints of LED.


Note that there is no space between coordinates, and between column and row, for any type of query. See example for clarity. />

### Output

For each input line starting with 'L' output "ON" if the LED is on, and "OFF" otherwise, on separate line.

### Example

<pre>
<b>Input:</b>
9 2 10
WADAEAFAG
VAGAD
LAFAHAGAE
VAKAK
LAJAKAKAJ
LAKAIAGAB
LABABACAB
RAKAK
LAJAKAKAJ

<b>Output:</b>
ON
ON
OFF
OFF
OFF
</pre>
### Explanation

The input is to interpreted as

<pre>
9 2 10
W 3 4 5 6
V 6 3
L 5 7 6 4
V 10 10
L 9 10 10 9
L 10 8 6 1
L 1 1 2 1
R 10 10
L 9 10 10 9
</pre>