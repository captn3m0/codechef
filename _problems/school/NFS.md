---
{"category_name":"school","problem_code":"NFS","problem_name":"Turn It","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/Jw-Q5z7L4q8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"10-03-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"ltime94"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/NFS","time":{"view_start_date":1616864402,"submit_start_date":1616864402,"visible_start_date":1616864402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=NFS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Russian](https://www.codechef.com/download/translated/LTIME94/russian/NFS.pdf) and [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME94/mandarin/NFS.pdf)

Chef is playing Need For Speed. Currently, his car is running on a straight road with a velocity $U$ metres per second and approaching a $90^{\circ}$ turn which is $S$ metres away from him. To successfully cross the turn, velocity of the car when entering the turn must not exceed $V$ metres per second.

The brakes of Chef's car allow him to slow down with a deceleration (negative acceleration) not exceeding $A$ metres per squared second. Tell him whether he can cross the turn successfully. The velocity $v$ when entering the turn can be determined from Newton's 2nd law to be $v^2 = U^2 + 2 \cdot a \cdot S$ if the car is moving with a uniform acceleration $a$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains four space-separated integers $U$, $V$, $A$ and $S$.

### Output
For each test case, print a single line containing the string `"Yes"` if Chef can cross the turn successfully or `"No"` if he cannot (without quotes).

You may print each character of each string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

### Constraints
- $1 \leq T \leq 10^5$
- $1 \leq U, V, A, S \leq 10^4$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
3
1 1 1 1
2 1 1 1
2 2 1 1
```

### Example Output
```
Yes
No
Yes
```
	
### Explanation
**Example case 1:** Since $U = V = 1$, Chef does not need to brake and will be able to turn successfully.

**Example case 2:** The smallest velocity Chef's car can have even with the maximum deceleration is $\sqrt{2 \cdot 2 - 2 \cdot 1 \cdot 1} = \sqrt{2}$, which is greater than the maximum allowed velocity for a safe turn.

**Example case 3:** The smallest velocity Chef's car can have with the maximum deceleration is again $\sqrt{2}$, which is smaller than the maximum allowed velocity for a safe turn.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>