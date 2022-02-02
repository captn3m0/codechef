---
{"category_name":"school","problem_code":"BOLT","problem_name":"World Record","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n1.0 1.0 1.0 10.45\r\n1.0 1.0 1.0 10.44\r\n1.0 1.0 0.9 10.44","output":"YES\r\nNO\r\nNO","explanation":"**TestCase 1:**  Final speed of Chef after considering all the factors will be $1 * 1 * 1 * 10.45 = 10.45$ m / sec. So the time taken to complete the race will be $100 / 10.45 = 9.569 = 9.57$ sec after rounding to $2$ places after decimal. Since the time is strictly less than the world record time, therefore Chef can break the record.\r\n\r\n**TestCase 2:**  Final speed of Chef after considering all the factors will be $1 * 1 * 1 * 10.44 = 10.44$ m / sec. So the time taken to complete the race will be $100 / 10.44 = 9.578 = 9.58$ sec after rounding to $2$ places after decimal. Since the time is equal to the world record time, therefore Chef can\u0027t break the record.\r\n\r\n**TestCase 3:**  Final speed of Chef after considering all the factors will be $1 * 1 * 0.9 * 10.44 = 9.396$ m / sec. So the time taken to complete the race will be $100 / 9.396 = 10.643 = 10.64$ sec after rounding to $2$ places after decimal. Since the time is strictly more than the world record time, therefore Chef can\u0027t break the record.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/pIW1dofFSb0","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"30-03-2021","tags":{"0":"april21","1":"cakewalk","2":"daanish_adm","3":"floating"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BOLT","time":{"view_start_date":1618219800,"submit_start_date":1618219800,"visible_start_date":1618219800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BOLT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/APRIL21/bengali/BOLT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL21/mandarin/BOLT.pdf), [Russian](https://www.codechef.com/download/translated/APRIL21/russian/BOLT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL21/vietnamese/BOLT.pdf) as well.

**"Usain Bolt makes a new world record completing $100$ m in $9.58$ seconds"**. 

This news headline has been echoing in Chef's mind since $2009$ when he started his career in sprinting. This time in the $2021$ Tokyo Olympics he is determined to make a new world record. 

There are mainly $3$ important factors that result in the variation in speed during practice and during competition.

- The first factor is a difference in track material which results in variation in the speed at competition with respect to practice by a factor of $k1$.

- The second factor is wind speed which results in variation in the speed at competition with respect to practice by a factor of $k2$.

- The final factor is the maximum speed achieved during practice. If the maximum speed during practice is $v$ m/s then in competition it will be $k3 * v$ m/s.

Given Chef's max speed $v$ during practice and the factors $k1, k2, k3$, find whether he will be able to create a new world record, i.e, can he complete $100$ m in less than $9.58$ seconds?

**Note:** The final time displayed by the Olympics clock is showing after rounding the original time to $2$ places of decimal and is the only measure of runners performance.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of a single line of input, four floats $k1, k2, k3, v$. 

###Output:
Output in a single line, the answer, which should be "YES" if it's possible for Chef to create a new world record and "NO" if not.

You may print each character of the string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

###Constraints 
- $1 \leq T \leq 10^5$
- $0 \lt k1, k2 \lt 2$
- $0 \lt k3 \leq 1$
- $9 \lt v \lt 11$
- $k1, k2, k3$ contain $1$ digit after decimal.
- $v$ contains $2$ digits after decimal.

### Subtasks
**Subtask #1 (100 points):** original constraints

###Sample Input:
```
3
1.0 1.0 1.0 10.45
1.0 1.0 1.0 10.44
1.0 1.0 0.9 10.44
```

###Sample Output:
```
YES
NO
NO
```
	
###Explanation:
**TestCase 1:**  Final speed of Chef after considering all the factors will be $1 * 1 * 1 * 10.45 = 10.45$ m / sec. So the time taken to complete the race will be $100 / 10.45 = 9.569 = 9.57$ sec after rounding to $2$ places after decimal. Since the time is strictly less than the world record time, therefore Chef can break the record.

**TestCase 2:**  Final speed of Chef after considering all the factors will be $1 * 1 * 1 * 10.44 = 10.44$ m / sec. So the time taken to complete the race will be $100 / 10.44 = 9.578 = 9.58$ sec after rounding to $2$ places after decimal. Since the time is equal to the world record time, therefore Chef can't break the record.

**TestCase 3:**  Final speed of Chef after considering all the factors will be $1 * 1 * 0.9 * 10.44 = 9.396$ m / sec. So the time taken to complete the race will be $100 / 9.396 = 10.643 = 10.64$ sec after rounding to $2$ places after decimal. Since the time is strictly more than the world record time, therefore Chef can't break the record.


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>