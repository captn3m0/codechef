---
category_name: challenge
problem_code: TANKS
problem_name: Tanks
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
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
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: 'iscsi '
problem_tester: xcwgf666
date_added: 19-11-2015
tags:
    - iscsi
editorial_url: 'http://discuss.codechef.com/problems/TANKS'
time:
    view_start_date: 1450085400
    submit_start_date: 1450085400
    visible_start_date: 1450085400
    end_date: 1735669800
    current: 1525454426
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC15/mandarin/TANKS.pdf), [Russian](http://www.codechef.com/download/translated/DEC15/russian/TANKS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC15/vietnamese/TANKS.pdf) as well.

Chefland is under attack. The enemy forces are using powerful tanks to break Chefland's defense. The government wants to destroy the enemy tanks, but is unsure of their numbers. It has, therefore, requested the math whizs amongst the public (that's you guys!) to come out and help estimate how many tanks the enemy has. The government simulates the current situation to decide who has the best solution.

The government spies have gathered the following information about tanks and their production line:

- There are **K** different types of tanks.
- One production line can make only one type of tank.
- Two different production lines cannot make the same type of tank.
- When installing a production line, the enemy mathematicians have to setup the **serial\_id generator**, which cannot be modified later.
- Difference between the **serial\_id**'s of any two tanks of the same type cannot exceed **M**.

 The inventor of the **serial\_id generator** wanted to make the serial numbers extremely difficult to guess, and so he built a tricky machine.

The machine is set up using the following three initial parameters.

- start\_id is a non-negative integer
- direction can be either **increment** or **decrement**
- sequence\_type can be normal, prime, Ulam(1,2), or Ulam(2,3)

More details about the **serial\_id generator** are provided later.

We can ask the Chefland government to capture a tank, and then provide us with the captured tank **type** and **serial\_id**. The capture query can be:

- Capture a tank of type **i** (1 ≤ i ≤ K). This costs **Ci**.
- Special capture: capture a tank of any type. This operation has a cost **C**.

Every tank type has different armour, and therefore we need different kinds of bomb for each of them, which also have different prices (**Bi** for the bomb piercing the armor of the **i**th tank type). After we finish the above scouting process, we need to provide the number (**Di**) of bombs we need (for each type). Each bomb can destroy one tank (but the bomb completely annihilates the tank to little bits of scrap metal, so we can't extract any information from a destroyed tank.) If the enemy has **Ri** tanks remaining after the captures, and we ask for **Di** bombs but **Ri** &gt; **Di**, than we have to pay **Pi** penalty for each remaining tank (after **Di** of them have been destroyed).

 The goal is to minimize the capture\_cost + destroy\_cost + penalty\_cost:

- capture\_cost: ∑ cost of capture operations
- destroy\_cost: ∑ **Di** \* **Bi** (some over all tank types)
- penalty\_cost: ∑ max((**Ri** - **Di**) , 0) \* **Pi** (sum over all tank types)

More detail about **serial\_id generator**:

- **normal** sequence: 0, 1, 2, 3, … is the sequence of non-negative integers.
- **prime** sequence: the ith element is the (ith prime number + 1) / 2 *(integer division)*. So, the sequence is: 1, 2, 3, 4, 6 ….
- **Ulam(1,2)** sequence: 1, 2, 3, 5, …. You can read more about this sequence [ here.](https://en.wikipedia.org/wiki/Ulam_number)
- **Ulam(2,3)** sequence: 2, 3, 5, 7, ….

So the serial\_id of the ith tank will be start\_id ± the ith number in the sequence. (plus if the direction of the serial id generator was setup with the direction parameter as **increment**, minus otherwise). e.g. SerialGenerator(start\_id = 12345, increasing, Ulam(1,2)) will produce the following **serial\_id**'s: 12346, 12347, 12348, 12350, 12352 ….

**Note.** This might help: [German tank problem.](https://en.wikipedia.org/wiki/German_tank_problem)

### Input

The first line of input contains the integer **M**.

The second line of the input contains an integer **U12**, denoting the number of elements of the Ulam(1,2) sequence provided to you. The next **U12** lines contain an integer each: such that the ith line gives the ith element of the Ulam(1,2) sequence. Each of these numbers is at most  **M + 1**.

The following line contains an integer **U23** denoting the number of Ulam(2,3) sequence provided to you. The next U23 lines contain an integer each. Each of these numbers is at most  **M + 2**.

The following line of input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two space-separeated integers: **K** and **C**. This is followed by a line containing **K** space-separated integers: **C1**, **C2**, …, **CK**. Similarly, the next two lines for the test case contain **K** space-separated integers each: the first line specifying the sequence **Bi**, and the second **Pi**.

### Output

For each test case, the output should be as follows.

If you want to capture a tank, then just output a line with a non-negative integer denoting the type of the tank you want captured, or 0 if you do not care about the type of the tank being captured.

You can keep on repeating the above request until desired. If you think you have enough information, then output -1 in a new line. This ends the scouting process. Of course, if you do not want to capture any tanks at all, then you can output this in the first line itself.

After scouting is finished, print a single line with **K** space-separated non-negative integers denoting the sequence **Di**. In case any **Di** is negative, or exceeds **M**, then you will get a wrong answer verdict.

### Interactivity details

This is an **interactive** challenge problem, so after you output the description of your capture request, flush the output buffer. In C++, you can do this with **fflush(stdout);** routine.

After you do it, you'll receive the capture tank **type**, and its **serial\_id**. If there are no tanks of this type left, then you will get **type -1** answer. (Also applies if the requested type is zero, and no more tanks are available to be captured.)

### Constraints

The test cases for the problem are divided into **4** groups, each containing **5** test cases. - Group 1: M = 103
- Group 2: M = 104
- Group 3: M = 105
- Group 4: M = 106

Moreover, in all the test cases: - **T = 20**
- **0 &lt; U12 , U23 &lt; 100000**
- **3 ≤ K ≤ 20**
- **100 ≤ C ≤ 200**
- **C &lt; Ci ≤ 3\*C**
- **10 ≤ Bi ≤ C**
- **Ci &lt; Pi ≤ 1000**
- **0 ≤ serial\_id ≤ 109**

### Test Case Generation

The numbers of tanks, **K**, is chosen from the interval **(3, 20)**. After that, for every type of tank, the following constants are generated uniformly and independently of the other tank types.

- **C** from **(100, 200)**
- **Ci** from **(C+1, 3\*C)**
- 10% of the test cases **Bi** from **(10, C)**, 90% of the test cases **Bi** from **(C/4, C)**
- **Pi** from **(Ci+1, 1000)**
- sequence\_type
- direction from **{increment, decrement}**

We choose start\_id uniformly from (0, 109), and the number of tanks is chosen uniformly from the valid range. If one of the tanks' serial\_id is not in the valid range (0, 109), then repeat this.

Capture requests work in the following way:

- All capture requests are independent of each other.
- If a particular tank type is requested, a tank is chosen randomly from the set of tanks of this type by uniform sampling.
- For special capture requests (when no tank type is given), first a probability distribution is constructed in which all the tank types which have at least one tank remaining have a probability inversely proportional to their usual capture cost, while types having no tanks remaining are ignored. Formally, p(class=**i** | **i** has at least one tank) ∝ 1/**Ci**), and p(class=**i** | **i** has no tank remaining) = 0. A tank type is selected by sampling this distribution, and then a tank of this type is chosen ramdonly and uniformly.

### Scoring

 The score calculated on a test case is:
( capture\_cost + destroy\_cost + penalty\_cost ) / ( ∑(number of tanks of ith type) \* Bi ).

The score in one test file is the sum of the scores over all test cases. The total score of your solution is the sum of the scores for all the test files. During the contest, scores only for one test case per group (so, in total, at 4 test cases) are reported.

### Example

<pre><b>Input:</b>
<b>Initial input: </b>
<tt>
5          M
5          U12
1
2
3
4
6
4          U23
2
3
5
7
1          T
2 111      K C
112 333    C<sub>1</sub> C<sub>2</sub>
10 111     B<sub>1</sub> B<sub>2</sub>
113 1000   P<sub>1</sub> P<sub>2</sub>
</tt>

Let's assume the first type of enemy tanks has the generator with initial parameters (start_id = 11, increasing, normal). So, the serial id's are 11, 12.
The second type of tank generator is (start_id = 234, decreasing, ulam12). So, the serial id's are 233, 232, 231.

<b>One possible output:</b>
-1
2 3

Destroy cost = 2 * 10 + 3 * 111 = 353, the other costs are 0, and you will get 1.0 score for this.

<b> Another possible solution / communication </b>
<tt>
0          
</tt>
</pre>