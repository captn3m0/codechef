---
{"category_name":"school","problem_code":"CYCLICQD","problem_name":"Cyclic Quadrilateral","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/_zLdQ5-VB8U","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"iscsi","date_added":"21-06-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"start5","3":"vichitr"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CYCLICQD","time":{"view_start_date":1624800600,"submit_start_date":1624800600,"visible_start_date":1624800600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CYCLICQD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin Chinese](https://www.codechef.com/download/translated/START5/mandarin/CYCLICQD.pdf), [Russian](https://www.codechef.com/download/translated/START5/russian/CYCLICQD.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START5/vietnamese/CYCLICQD.pdf) as well.

You are given the sizes of angles of a simple quadrilateral (in degrees) $A$, $B$, $C$ and $D$, in some order along its perimeter. Determine whether the quadrilateral is cyclic.

Note: A quadrilateral is cyclic if and only if the sum of opposite angles is $180^{\circ}$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains four space-separated integers $A$, $B$, $C$ and $D$.

### Output
Print a single line containing the string `"YES"` if the given quadrilateral is cyclic or `"NO"` if it is not (without quotes).

You may print each character of the string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

### Constraints
- $1 \leq T \leq 10^4$
- $1 \leq A, B, C, D \leq 357$
- $A + B + C + D = 360$

### Example Input
```
3
10 20 30 300
10 20 170 160
179 1 179 1
```

### Example Output
```
NO
YES
NO
```

### Explanation
**Example case 1:** The sum of two opposite angles $A + C = 10^{\circ} + 30^{\circ} \neq 180^{\circ}$.

**Example case 2:** The sum of two opposite angles $A + C = 10^{\circ} + 170^{\circ} = 180^{\circ}$ and $B + D = 20^{\circ} + 160^{\circ} = 180^{\circ}$.

**Example case 3:** The sum of two opposite angles $B + D = 1^{\circ} + 1^{\circ} \neq 180^{\circ}$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>