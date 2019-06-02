---
category_name: hard
problem_code: OAK
problem_name: 'Persistent oak'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: alex_2oo8
problem_tester: null
date_added: 16-09-2016
tags:
    - alex_2oo8
time:
    view_start_date: 1497259800
    submit_start_date: 1497259800
    visible_start_date: 1497259800
    end_date: 1735669800
    current: 1497589508
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE17/mandarin/OAK.pdf), [Russian](http://www.codechef.com/download/translated/JUNE17/russian/OAK.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE17/vietnamese/OAK.pdf) as well.

Chef has a huge and beautiful tree in his garden (an oak, not the kind of tree you just thought of), so quite often he just sits inside and looks at this wonderful oak through the window.

When observing the tree for a long time Chef sees that even an oak has a life. A bunch of cute green acorns may grow on some branches, which in turn may cause some branches to fall down due to not being able to hold all the weight. A bird may sit down on a branch causing all the acorns to fall down from this branch, from the branches growing out of this branch, and from all the branches growing out of them, and so on... In other words, it really looks like the oak is alive.

The tree has a trunk (once again, a wooden trunk is meant here) and **n** branches. Every branch grows either out of the trunk or out of another branch. We will say that branch **B** is below branch **A** if there exists a sequence of branches **C1, C2, ..., Ck** such that **C1 = A; Ck = B** and **Ci + 1** grows out of **Ci** for all **1** ≤ **i** k. Every branch has a maximum weight **w** it can hold ― in case a branch plus all the branches below it have more than **w** acorns overall, the branch (together with all the branches below it and all the acorns on them) falls down. The branch which falls is the 'deepest' branch. That is, once some acorns have grown on a branch, then, if this branch cannot handle the weight, it falls. Else, if the branch on which this branch grows cannot handle the weight, that branch falls, and so on. This happens sequentially, and so once a branch has fallen, none of the branches above it fall in the same moment, and at most one branch would fall after any particular event. Also, the trunk is super strong, and hence can carry any amount of weight.

Oh, and just one more thing ― the tree is [persistent](https://en.wikipedia.org/wiki/Persistent_data_structure), so it is quite hard for Chef to remember all the states of the oak, can you help him with this? Chef will tell you everything he notices about the tree, but you should answer what exactly the last event resulted into.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

For each test case, the first line of input contains two integers **n** and **m** ― the number of branches the oak has and the number of events Chef has to tell you about. The branches are numbered from 1 to **n**.

The v-th of the following **n** lines contains **2** integers ― **pv** and **wv**. If **pv = 0**, then branch **v** grows out of the trunk, otherwise it grows out of branch **pv**. **wv** is the maximum weight branch **v** can hold.

The i-th of the following **m** lines describes the i-th event Chef has observed:

- The first integer is **state** ― the state of the oak we are applying the new event to. **state = 0** means the state at the very beginning with no branches fallen and no acorns grown. **state > 0** means the state right after the event number **state**
- The second integer is **q** ― the type of the event
- If **q = 1**, two integers **u** and **x** follow, meaning that **x** acorns have grown on the branch **u**. After this event some branch could have fallen, and if this is the case, output the number of this branch. Otherwise output 0
- If **q = 2**, an integer **u** follows meaning that a bird has sat down on the branch **u** and all the acorns from this branch and from all the branches below it have fallen. For this type of event Chef asks you to print the total number of acorns that have fallen

### Output

For each event print the value Chef asked you about on a separate line.

### Constraints

- **1** ≤ **T** ≤ **5**
- **1** ≤ **n, m** ≤ **105**
- 0 ≤ **pv** v
- 0 ≤ **wv, x** ≤ **107**
- **1** ≤ **u** ≤ **n**
- 0 ≤ **state** m

### Subtasks

- Subtask #1: **n, m** ≤ **100** (13 points)
- Subtask #2: The tree is not persistent, i.e. the **state** for event **i** will be equal **i - 1** (29 points)
- Subtask #3: There will be only events of type **1** (29 points)
- Subtask #4: No additional constraints (29 points)

### Example

<pre><b>Input:</b>
1
5 6
0 5
1 3
0 2
3 1
3 4
0 1 5 5
0 1 4 1
2 1 5 2
2 2 3
4 1 5 2
3 1 1 7

<b>Output:</b>
5
0
3
1
0
1
</pre>
### Explanation

**Example event 1.** Branch **5** can hold at most **4** acorns, so after **5** have grown there, it immediately falls down. Notice that the branch **3** doesn't fall down (even though it also can't hold **5** acorns), because the branch **5** no longer grows out of it. We output **5** as this branch has fallen down and create a state of the oak with index **1** having branch **5** fallen and having no acorns in the other four branches.

**Example event 2.** We take the state 0 as the base, so we once again have branch **5** on the tree. One acorn has grown at the branch **4**. No branch has fallen as every one can hold at least one acorn, thus we print 0. Resulting state after this event (with index **2**) has all five branches and one acorn on branch **4**.

**Example event 3.** We take the state **2** as the base, which is the resulting state after previous event. After two acorns have grown on the branch **5**, we have one acorn on branch **4** and two acorns on branch **5**. Both these branches are below branch **3** which can hold at most two acorns, so as a result branch **3** falls down. The resulting state (with index **3**) has only two branches left ― **1** and **2** with no acorns on them.

**Example event 4.** We once again take the state **2** as the base, but this time remove all the acorns from branch **3** and from all the branches below it (**4** and **5**). Branch **5** had no acorns and branch **4** had one acorn on it (that has grown during event **2**), so we print **1** as the total number of acorns fallen. The resulting state (with index **4**) has the full tree (no branches have fallen) with no acorns. So, the state **4** is basically equivalent to the state 0.

**Example event 5.** This event is similar to event **3**. The only difference is that the base state (**4** for this event) doesn't contain any acorns. So branch **3** has only two acorns below it after this event and doesn't fall down.

**Example event 6.** We take state **3** as the base, it has only two branches ― **1** and **2** without any acorns. Seven acorns grow on the branch **1** causing this branch to fall down (as it can hold only up to **5** acorns). The resulting state after this event contains just plain trunk without a single branch (as a consequence it would be impossible to use this state in any future events as a base state).
