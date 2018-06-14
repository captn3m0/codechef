---
category_name: challenge
problem_code: KALKI
problem_name: 'Kali and Devtas'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
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
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: nssprogrammer
problem_tester: xiaodao
date_added: 23-09-2014
tags:
    - challenge
    - dec14
    - graph
    - nssprogrammer
    - optimization
    - radio
    - tree
editorial_url: 'http://discuss.codechef.com/problems/KALKI'
time:
    view_start_date: 1418643478
    submit_start_date: 1418643478
    visible_start_date: 1418643000
    end_date: 1735669800
    current: 1525454419
is_direct_submittable: false
layout: problem
---

All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](/download/translated/DEC14/mandarin/KALKI.pdf) and [Russian](/download/translated/DEC14/russian/KALKI.pdf).

The apocalyptic demon **[Kali](http://en.wikipedia.org/wiki/Kali_%28demon%29)** is on a rampage. The ground shudders under his feet, trees shrivel and animals and birds scurry away from his path. In order to save the universe from devastation, all the devtas led by devraj **[Indra](http://en.wikipedia.org/wiki/Indra)** decide to meditate to please Lord **[Vishnu](http://en.wikipedia.org/wiki/Vishnu)** so that he appears in the form of **[Kalki](http://en.wikipedia.org/wiki/Kalki)**, his last avatar, and kill the demon.

Each devta can sit in meditation at a particular place on **[Swarglok](http://en.wikipedia.org/wiki/Svarga)** (the heaven). Considering Swarglok as a 2-dimensional plane, the position of each devta is a fixed point with integer coordinates. The positions of all the devtas are distinct from each other.

While meditating the devtas connect to each other by means of astral projections - metaphysical threads that connect one devta to another. They must do so in such a way to satisfy two criteria:

-   Each devta must be able to connect to every other devta by following a path of astral projections.
-   No subgroup of devtas may be connected by a cycle of astral projections.

In simple terms, the astral projections must form a tree connecting all devtas.

**What needs to be optimized ?**

Once the devtas have taken their positions and are connected as a single group to start meditation, a _ring of influence_ is formed around each devta. This ring is centered at the position of the devta, and has a radius equal to the Euclidean distance from this devta to the furthest devta directly connected via an astral projection.

Since different devtas have their own supernatural powers (**[Indra](http://en.wikipedia.org/wiki/Indra)** is the rain god, **[Agni](http://en.wikipedia.org/wiki/Agni)** is the fire god,**[Varuna](http://en.wikipedia.org/wiki/Varuna)** is the water god, **[Vayu](http://en.wikipedia.org/wiki/Vayu)** is the air god , etc), the influence ring of each devta has an adverse effect on all other devtas which lie within or on this ring. In other words, the efficiency of a devta to perform meditation decreases as the number of influence rings that include him increases.

For each devta **Di**, define **Ci** as the number of influence rings that include or touch **Di** (including their own). Now devraj Indra wants the devtas to connect in such a manner so as to minimize the maximum value of **Ci** over all devtas. So he has sent a message to **[Bhulok](http://en.wikipedia.org/wiki/Prithvi)** (the earth) and he needs help from the best programmers on the planet.

### Input

The first line contains the number of test cases **T**.

Each test case starts with an integer **N**, where **N** denotes the number of devtas.

Then **N** lines follow - the **i**-th such line consists of two integers **xi** and **yi**, specifying the coordinates of the **i**-th devta.

### Output

For each test case output exactly **N-1** lines. Each line should consist of two integers, specifying a pair of devtas between whom an astral projection should be formed.

### Constraints

-   **1 ≤ T ≤ 100**
-   **3 ≤ N ≤ 400**
-   **-2000 ≤ x i ≤ 2000**
-   **-2000 ≤ y i ≤ 2000**

### Scoring and test data generation

The score is **C**, where **C = max(Ci)** for **1 <= i <= N**. The sequence of positions for devtas is generated randomly and the positions are distributed uniformly.

### Example

```
<b>Input:</b>
1
5
-3 0
-1 0
0 1
1 0
2 0

<b>Example of a valid output:</b>
1 2
2 3
3 4
4 5
<pre>
```

### Explanation

The second devta is connected to two other devtas: the first devta (a distance of 2 away), and the third devta (a distance of sqrt(2) away). The larger of these distances is 2, so the radius of the second devta's ring of influence is 2. We can calculate the other rings similarly.

Here is a diagram with the astral projections represented in red, and all of the influence rings represented in blue.

![](/download/extimages/90e2169eaaad51f55db34d4304de99b5.png)

The second devta lies within three rings of influence - the first devta's, the second devta's himself, and the third devta's. We can calculate the other values similarly:

**C1 = 2; C2 = 3; C3 = 3; C4 = 4; C5 = 2.**

The maximum of these values is 4, so you would get a score of 4.

Other possible outputs may result in higher or lower scores. Your objective is to minimize your score.
