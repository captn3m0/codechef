---
{"category_name":"easy","problem_code":"BULBS","problem_name":"Bulbs and Wires","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5 2\r\n01001","output":1,"explanation":"**Example case 1:** We can cut the wires between pairs of bulbs $(2, 3)$ and $(4, 5)$, switch on bulbs $1$, $2$ and $5$, and then disconnect bulb $1$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/VCSUDyzgSL8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"manishtanwar","problem_tester":"","date_added":"10-09-2020","tags":{"0":"cook122","1":"greedy","2":"manishtanwar","3":"manishtanwar","4":"math","5":"rahuldugar","6":"rishup_nitdgp","7":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BULBS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BULBS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK122/hindi/BULBS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK122/mandarin/BULBS.pdf), [Russian](https://www.codechef.com/download/translated/COOK122/russian/BULBS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK122/vietnamese/BULBS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK122/bengali/BULBS.pdf) as well.

There are $N$ light bulbs in a row, numbered $1$ through $N$ from left to right. Each bulb can be in one of the states "on" or "off". Initially, all the bulbs are "off". Each bulb is also connected to its (at most two) adjacent bulbs by wires.

You should reach a state described by a given a binary string $S$ with length $N$ ― for each valid $i$, if the $i$-th character of $S$ is '1', the $i$-th bulb should be "on", and if it is '0', the $i$-th bulb should be "off". You may do that by performing the following steps in the given order:
1. Cut up to $K$ of the $N-1$ wires between adjacent bulbs (possibly none of them).
2. Switch on some bulbs (possibly none). Here, whenever two bulbs are still connected by wires (directly or indirectly) and one of them gets switched on, then the other one also gets switched on.
3. Disconnect some bulbs from the electrical network. Here, disconnecting a bulb switches it off, but it does not affect any other bulbs ― if a bulb was switched on before this step and it was not disconnected in this step, it remains switched on afterwards.

Minimise the number of bulbs you need to disconnect in step 3 in order to reach the given final state of the bulbs.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains a single string $S$.

### Output
For each test case, print a single line containing one integer ― the smallest number of bulbs you need to disconnect.

### Constraints
- $1 \le T \le 1,000$
- $0 \le K \lt N \le 10^5$
- $|S| = N$
- $S$ contains only characters '0' and '1'
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$

### Example Input
```
1
5 2
01001
```

### Example Output
```
1
```

### Explanation
**Example case 1:** We can cut the wires between pairs of bulbs $(2, 3)$ and $(4, 5)$, switch on bulbs $1$, $2$ and $5$, and then disconnect bulb $1$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>