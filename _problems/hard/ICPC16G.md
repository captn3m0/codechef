---
category_name: hard
problem_code: ICPC16G
problem_name: 'Robolympic Batons'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: admin3
problem_tester: null
date_added: 18-10-2016
tags:
    - admin3
time:
    view_start_date: 1477153800
    submit_start_date: 1477153800
    visible_start_date: 1477153800
    end_date: 1735669800
    current: 1493556973
layout: problem
---
All submissions for this problem are available.Today is the Robolympics athletic event. **N** batons numbered 0 to **N - 1** are placed in a circular fashion where baton numbers increase in clockwise direction. Also, some of the batons are _special_. **M** robots start in the event by standing near a baton position and picking it up. Note that a baton cannot be held by more than one robot, therefore all robots have distinct positions in the circular array of batons.

Now, this event lasts for **N** seconds. In each second, each robot drops the baton currently in its hand and moves to next position in clockwise direction _i.e._ if a robot has baton **i** in its hand at **t = 0**, at **t = 1** he will be holding baton **(i + 1) % N**.

Crowd goes berserk whenever there comes a moment when all robots have picked up _special_ batons. Your aim is to count how many times it will happen during the whole race. Note that crowd can go berserk even at **t = 0**. But since race is over at **t = N**, crowd doesn't care anymore. e. The crowd will not go berserk at **t = N**.

### Input

First line contains **N** and **M** denoting the number of batons and number of robots participating in the event. Next line contains **N** space separated integers where **i**th integer is 0 or 1 denoting whether baton numbered **i - 1** is _special_ or not. Next line contains **M** integers denoting the index(0 to N-1) of initial baton that robots have picked up.

### Output

Output one and only integer denoting the required answer.

### Constraints

- **1** ≤ **N** ≤ **5\*105**
- **1** ≤ **M** ≤ **N**

### Example

<pre><b>Input 1:</b>
3 1
1 0 1
0

<b>Output 1:</b>
2

<b>Input 2:</b>
4 2
1 0 1 0
1 3

<b>Output 2:</b>
2

<h3>Explanation</h3>
<p><b>Example input 1.</b> <br></br>
Batons numbered 0 and 2 are <i>special</i>.
Batons held by robots at <b>t = 0</b>: [0]
Batons held by robots at <b>t = 1</b>: [1]
Batons held by robots at <b>t = 2</b>: [2]

Note that at <b>t = 0, 2</b> all robots have special batons held.
<br></br>
<b>Example input 2.</b> <br></br>
Batons numbered 0 and 2 are <i>special</i>.
Batons held by robots at <b>t = 0</b>: [1, 3]
Batons held by robots at <b>t = 1</b>: [2, 0]
Batons held by robots at <b>t = 2</b>: [3, 1]
Batons held by robots at <b>t = 3</b>: [0, 2]

Note that at <b>t = 1, 3</b> all robots have special batons held.
</p>
</pre>