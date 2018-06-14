---
category_name: challenge
problem_code: ANUMFS
problem_name: 'The Malaysian Flight Search'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: anudeep2011
problem_tester: xcwgf666
date_added: 29-03-2014
tags:
    - anudeep2011
    - challenge
    - interactive
    - may14
editorial_url: 'http://discuss.codechef.com/problems/ANUMFS'
time:
    view_start_date: 1399887000
    submit_start_date: 1399887000
    visible_start_date: 1399887000
    end_date: 1735669800
    current: 1525199500
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY14/mandarin/ANUMFS.pdf) and [Russian](http://www.codechef.com/download/translated/MAY14/russian/ANUMFS.pdf).

### Problem description.

Malaysia Airlines Flight MH370 disappeared on March 8th with 239 people aboard. After a lot of theories and extensive search, the Prime Minister of Malaysia declared that the flight was crashed in the Indian Ocean.

After gathering information, the area where the Black Box is present has been identified. The Black Box has a signal transmitter which responds to a special kind of signal.

We have search planes which can go to a particular location, and send the special kind of signal in all directions to a certain range. If the Black Box receives that signal, it will respond back.

As the location of crash is very far from nearest land and the cost to operate planes are high, Officials would like to minimize the total cost of this search operation. You are to write a program to help them

For the purpose of this problem, we consider 2-D coordinate system, forget about the depth of Indian Ocean and the following are true:

- We have many planes with us, each plane is defined by 3 variables (**I**, **R**, **C**). **I** is the unique id of the plane. **R** is the range it can transmit the special signal. **C** is the amount of Rupees (Yes, we are operating from India) required for one unit of travel.
- All the planes are present at (0,0).
- Same plane can be used any number of times.
- All the distances we consider in this problem are Manhattan distance. Distance between (a,b) and (c,d) is **abs(a-c)+abs(b-d)**.
- Given the plane id, and coordinates (x,y) from where it has to transmit the special signal, the plane moves from (0,0) to (x,y), transmits the signal, records the reply from Black Box if any, and returns to (0,0)
- Cost of above operation would be sum of costs for (0,0) to (x,y) and (x,y) to (0,0), i.e, 2\*(x+y)\*C Rupees
- Black Box at position (a,b) responds to special signal from a plane at (x,y) with range **r** if abs(a-x) + abs(b-y)
- We always have a plane with **R = 0**.
- The Black Box need not be present inside the search area. It is possible that the Officials got wrong search area. Note that the Black Box can still respond to special signals.

This is an Interactive Problem, you will be given details of all available planes, and description of area inside which the Black Box is expected to be present. You need to issue commands of the form (**I**, **x**, **y**) which means that you would like to send plane with id **I** to position (**x**, **y**) and give the special signal. The automated judge will respond with "yes" or "no", "yes" if the Black Box responded, "no" otherwise.

### Input

- First line of input contains **n**, the number of coordinate points that are present on the search area boundary.
- Following **n** lines contain 2-D coordinates. Note that all the points on the boundary are given in the input. The boundary walls are always parallel to either of X-axis or Y-axis.
- Next line of input contains **m**, the number of planes available.
- Following **m** lines contains 2 integers **R** and **C**. Each plane is given Id in input order starting from 0. So the first plane has Id 0, and the last plane has Id **m-1**.

### Output

- To give a command, print 3 integers **I** **x** **y** as defined above.
- To stop the search and report answer, print 3 integers **-1** **x** **y** where **(x,y)** is the location of the Malaysia Airlines Flight MH370
- If the Flight is not present in the search area, print **-1 -1 -1**.

### Special

Attention: the program should clear the output buffer after printing each line. It can be done using fflush(stdout) command or by setting the proper type of buffering at the beginning of the execution - setlinebuf(stdout). Failure to flush the output buffer will result in Time Limit Exceeded verdict.

For example, at C/C++ you could use the following routines:

<pre>
bool SendPlane(int id, int x, int y) {
    printf("%d %d %d\n", id, x, y);
    fflush(stdout);
    char temp[4];
    scanf("%s", temp);
    return temp[0]=='y';
}
</pre>### Sample Input/Output

**NOTE : This sample input/output does not follow constrains**
<pre>
<tt>in: 4
in: 1 1
in: 1 2
in: 2 2
in: 2 1
in: 2
in: 0 100
in: 1 200
out: 0 1 1
in: no
out: 0 2 2
in: no
out: 0 1 2
in: yes
out: -1 1 2</tt>
</pre>### Explanation

The search area is a square of unit lenght with bottom left corner at (1,1). The missing flight is located at (1,2). We took all the input. Then issued the plane 0 to go to (1, 1). Special judge returned "no". Finally we issued the plane 0 to go to (1, 2) and special judge gave "yes". So we found the missing flight. we then output the same by giving command "-1 1 2". Score will be 2\*(1+1)\*100 + 2\*(2+2)\*100 + 2\*(1+2)\*100 = 1800/4 = 450.

### Constraints

**Search Area:**
- **1000** ≤ **n** ≤ **5000**
- Distance from **(0,0)** to any point in the search area ≤ **100000**
- **100000** ≤ Number of Integer Coordinate points inside the search area ≤ **200000**
- You can always enclose the whole search area in a 1024\*1024 square
- See test data generation for more details.

**Planes:**- **40** ≤ **m** ≤ **50**
- 0 ≤ **R** ≤ **600**
- **100** ≤ **C** ≤ **10000**

### Test Data Generation

**Search Area:** 
Step 1 : A square of size 1000\*1000 is taken, number of points inside are 10^6.
Step 2 : A rectangle of size **w\*h** is taken such that **w** and **h** are less than 400. Now this rectangle is placed on some random boundary point of the initial square. All the points that fall into this rectangle are removed from initial set of points.
Step 3 : Step 2 is repeated until atmost 200000 points are left. Then it is continued until a random condition fails.
Step 4 : Now we are left with at most 200000 points. This points define the search area, but in input only the points that lie on boundary are given.

**Sample Graph :**  [Click Here](http://www.codechef.com/download/ANUMFS.png)

**Planes:**
Refer constrains section for details about **m**, **R**, **C**. **m** and **C** are randomly chosen. Details about generation of **R** will not be disclosed.We always have a plane with **R = 0**

**Missing flight:**
With 0.65 probability the flight is kept inside the search area.
Position is close to boundary points and is randomly chosen with probability 1 (always) given that it is **outside** the search area

### Scoring

For all the issued commands of the form **I x y**, **I** has to be valid id, **(x,y)** must be a coordinate point inside the search area (On the boundary points are also valid). Not satisfying this constrains will result in Wrong Answer.

For the command of the form **-1 x y**, If **(x,y)** is outside the search area, or there is no Flight at **(x,y)**, it will result in Wrong Answer.

For the command of the form **-1 -1 -1**, If the fligh is actually present inside the search area, it will result in Wrong Answer.

Let **Cost** be the total cost of the Search operation. Now score for that test file is **Cost/Number Of Coordinate points inside search area**. It will show as Wrong answer if **Cost** is greater than 4\*10^12 or number of commands issued is greater than 5\*10^5.

**EDITS MADE**
**Old :**It will show as Wrong answer if **Cost** is greater than 10^9 or number of commands issued is greater than 5\*10^5.

**New :**It will show as Wrong answer if **Cost** is greater than 4\*10^12 or number of commands issued is greater than 5\*10^5.
