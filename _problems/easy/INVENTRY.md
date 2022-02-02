---
{"category_name":"easy","problem_code":"INVENTRY","problem_name":"Arranging the Inventory","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"3-11-2018","tags":{"0":"easy","1":"greedy","2":"kingofnumbers","3":"observations","4":"snckpe19","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/INVENTRY","time":{"view_start_date":1541269800,"submit_start_date":1541269800,"visible_start_date":1541269800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Russian](http://www.codechef.com/download/translated/S19PETST/russian/INVENTRY.pdf), [Vietnamese](http://www.codechef.com/download/translated/S19PETST/vietnamese/INVENTRY.pdf), [Hindi](http://www.codechef.com/download/translated/S19PETST/hindi/INVENTRY.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/S19PETST/mandarin/INVENTRY.pdf) and [Bengali](http://www.codechef.com/download/translated/S19PETST/bengali/INVENTRY.pdf) as well.

Chef has an inventory, which can be represented as a row of $N$ cells (numbered $1$ through $N$). Each cell is either empty or contains a box. Chef wants to rearrange the boxes in such a way that they are all on the left side of the inventory (so if there are $K$ boxes, they should occupy the leftmost $K$ cells). He may perform two types of moves:
- choose a cell $i$ ($1 \le i \le N-2$); if cells $i$ and $i+2$ are empty and cell $i+1$ contains a box, Chef stands in cell $i+2$ and pushes the box from cell $i+1$ to cell $i$
- choose a cell $i$ ($1 \le i \le N-2$); if cells $i+1$ and $i+2$ are empty and cell $i$ contains a box, Chef stands in cell $i+1$ and pulls the box in cell $i$ to cell $i+1$

The moves may be performed in any order, any number of times (possibly zero).

Find the minimum number of moves required to get all boxes to the left side of the inventory or determine that it is impossible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a string with length $N$ describing the inventory. For each $i$ ($1 \le i \le N$), the $i$-th character of this string is '#' if the $i$-th cell contains a box or '.' if the $i$-th cell is empty.

### Output
For each test case, print a single line containing one integer — the minimum number of moves required, or $-1$ if it is impossible to move all boxes to the left.

### Constraints 
- $1 \le T \le 100$
- $3 \le N \le 10^5$
- the sum of $N$ over all test cases does not exceed $10^6$

### Example Input
```
3
6
##.#..
7
.#.#.#.
5
##.##
```

### Example Output
```
1
6
-1
```
