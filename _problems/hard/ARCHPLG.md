---
languages_supported:
    - NA
title: ARCHPLG
category: NA
old_version: true
problem_code: ARCHPLG
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Byteland is a country located in the Archipelago of Rectangular Islands. The archipelago consists of 1&lt;=n&lt;=1000 islands. A fact that each island has a rectangular shape is very nice for Bytelandian cartographers.

Bytelandian islands are rather small and none are very fertile, so each of the rectangular pieces of cultivated land is under special control, simply speaking: ‘never enter there if you value your life’. Other areas are guaranteed to be freely accessible for all people.

The communication between islands is possible by ferries. On each island there is 0&lt;=b&lt;=10 terminals, from where crossings to another terminals on other islands are possible.
It is known that total number of crossing connections is 0&lt;=m&lt;=100000. Other infrastructure is practically unknown. Specifically the only possible
way of traveling through the island is to do it on foot.

Well, now we are close to a task you are requested to solve. John – one of the Bytelandian citizens is working as a sales manager. He is often requested to travel from one place to another which he rather dislikes. What he'd rather do is spend his time relaxing on the beach. Please help him to find a way to spare his time.

### Task

 Find the fastest ways for John to travel using ferries and foot paths on islands. Assume that while walking John is always moving one BM (Bytelandian unit of length) per BH (Bytelandian unit of time).
You can also assume that the ferry departures nearly immediately after John arrives the terminal, it will be enough to round up the walking time to the nearest integer.

### Input

In the first line t - the number of tests, then for each test:
in next line n - the number of islands. Description of each island is as follows:

<pre>
name
w h [island dimensions]
b - [number of terminals]
[description of each terminal in a form:]
name x y [name of a terminal and its coordinates]
F [number of restricted areas F<20]
xl, yd, xr, yu [coordinates of each restricted area,
0 <=xl < xr<=250 0<=yd < yu<=250.]
</pre>
All coordinates are nonnegative integers measured in BM according to upper left corner of an island.

You can assume that any two restricted areas are disjoint. After the description of all islands all ferry connections are given (each connection is bi-directional).

<pre>
m  [number of connections]
[description of each connection]
NB1 NW1 NB2 NW2 time [name of a first terminal, its island, the second respectively
and communiaction time]
...
[description follows]
...
NBS NWS NBC NWC [start and goal terminal for John]
</pre>
### Output

For each test describe the shortest route for John from terminal NBS on NWS island to terminal NBC on NWC island in the following format:

<pre>
case nr Y [nr - test number]
T [travel time in BH]
NBS  NWS
...
[consecutive terminals]
...
NBC NWC
[empty line]
[consecutive tests]
</pre>
If two consecutive terminals are located on the same island and John must take some walk you must give all middle point like in an example.

![](/content/kuszi:trectarch_example.png)

### Example

<pre>
<b>Input:</b>
1
3
W1
8 7
2
Lindos 4 0
Kamejros 4 7
3
2 1 6 2
2 3 6 4 
2 5 6 6 
W2
14 12
2
Malia 14 1
Knossos 1 12
5
2 6 10 10
11 1 12 6
8 1 10 5
11 7 12 9
3 2 5 4
W3 
1 1
1
Korkyra 0 0
0
2
Kamejros W1 Knossos W2 100
Malia W2 Korkyra W3 100
Korkyra W3 Lindos W1
</pre>
An example of a correct answer:

<pre>
<b>Output:</b>
case 1 Y
230
Korkyra W3
Malia W2
12 6
11 7
10 10
Knossos W2
Kamejros W1
2 6
2 1
Lindos W1
</pre>