---
category_name: hard
problem_code: GOODGAL
problem_name: 'Good galaxy'
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
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: pavel1996
problem_tester: xiaodao
date_added: 9-11-2014
tags:
    - dec14
    - graph
    - hard
    - pavel1996
editorial_url: 'http://discuss.codechef.com/problems/GOODGAL'
time:
    view_start_date: 1418643542
    submit_start_date: 1418643542
    visible_start_date: 1418643000
    end_date: 1735669800
    current: 1493556973
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese ](/download/translated/DEC14/mandarin/GOODGAL.pdf) and [Russian](/download/translated/DEC14/russian/GOODGAL.pdf).

A galaxy is a set of planets with some connections between pairs of planets. Connections between planets are mutual and no planet can be connected with itself. The distance between a pair of planets is the least number of connections that you have to pass through while travelling from the first planet to the second.

Now let's consider how good galaxies are formed.

Initially there is a galaxy that consists of exactly one planet. At any moment, the galaxy grows by first making a copy of itself; then connecting each planet in the first copy to the corresponding planet in the second copy. Thus a galaxy which has **P** planets and **M** connections would grow into a new galaxy with **2P** planets and **2M+P** connections.

This diagram shows how the galaxy grows over the first two iterations. Dark grey shows the copy of the galaxy; light grey shows the additional connections.

![](/download/extimages/a32212069d65c14f3c9b4a1cfbbb3571.png)

However, galaxies do not continue growing forever. Why? The answer is simple: comets. At any point after the galaxy has started growing, a comet may pass through the galaxy. When it does, it changes the connections between planets by the following rule:

*Two planets are connected after the comet arrives if and only if the distance between the planets was equal to 2 before the comet arrives.*

It can be shown that a comet will split a growing galaxy into two disconnected galaxies with identical structures.

After a comet has arrived, the galaxy stops growing. Researchers have discovered that each of the two identical galaxies formed by the comet are 'good galaxies' - fit for living. In fact, galaxies formed in this way are the *only* good galaxies that exist.

This diagram shows the result when a comet arrives after each of the first three iterations. In each one the red and blue colours show the two equivalent good galaxies.

![](/download/extimages/55bf4f46313dbc1cff5ebbd214e35142.png)

Unfortunately, nothing lasts forever. For many reasons, such as a second comet appearing, new planets or connections between them may be created or destroyed, resulting in galaxies with many other structures and causing the galaxy to lose its 'good' status.

You are given a galaxy with **N** planets and **M** connections. Your task is to determine whether this galaxy is a good galaxy - ie can be created by a comet passing through a growing galaxy.

### Input

The first line of the input contains one integer **T** denoting the number of test cases.

The first line of each test case contains two integers **N** and **M** - the number of planets in the galaxy and the number of connections. All planets are enumerated from 1 to **N**.

The following **M** lines each contain a pair of different integers - two planets which are connected in the galaxy. It's guaranteed that there won't be multiple connections between any pair of planets.

### Output

For each test case output one word per line: "YES" if the galaxy is a good galaxy, or "NO" if it is not.

### Constraints

- **1** ≤ **T** ≤ **5**
- **2** ≤ **N** ≤ **1024**
- 0 ≤ **M** ≤ **40 000**
 
### Subtasks

 **Subtask #1**  \[22 points\]: **N** ≤ **32** 
 **Subtask #2** \[78 points\]: maximum constraints 
### Example

 ```
<b>Input:</b>
5
2 1
1 2

2 0

3 3
1 2
2 3
1 3

4 6
1 2
1 3
1 4
2 3
2 4
3 4

4 5
1 2
1 3
1 4
2 3
2 4

<b>Output:</b>
YES
NO
NO
YES
NO
<pre>
### Explanation

**Test case 1.** This galaxy is equivalent to the red (or blue) galaxy in step 2 in the above image.

**Test case 2.** This galaxy is similar to test case 1, but the connection has been destroyed, so the galaxy is no longer good.

**Test case 3.** There are no good galaxies with 3 planets; some planets must have been destroyed.
