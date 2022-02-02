---
{"category_name":"school","problem_code":"CCISLAND","problem_name":"Chef On Island","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/kE6SuMjHirk","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"2-04-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"start3","3":"vichitr"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CCISLAND","time":{"view_start_date":1619357400,"submit_start_date":1619357400,"visible_start_date":1619357400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CCISLAND","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Suppose Chef is stuck on an island and currently he has $x$ units of food supply and $y$ units of water supply in total that he could collect from the island. He needs $x_r$ units of food supply and $y_r$ units of water supply per day at the minimal to have sufficient energy to build a boat from the woods and also to live for another day. Assuming it takes exactly $D$ days to build the boat and reach the shore, tell whether Chef has the sufficient amount of supplies to be able to reach the shore by building the boat?

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of a single line of input, five integers $x, y, x_r, y_r, D$. 

###Output:
For each testcase, output in a single line answer "YES" if Chef can reach the shore by building the boat and "NO" if not (without quotes).

You may print each character of each string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

###Constraints 
- $1 \leq T \leq 300$
- $1 \leq x, y \leq 100$
- $1 \leq x_r, y_r, D \leq 10$

###Sample Input
```:
3
4 2 1 1 1
4 2 1 3 1
4 2 4 2 2
```

###Sample Output:
```
YES
NO
NO
```
	
###Explanation:
**TestCase 1:** Chef's food supply will last for $\frac{4}{1} = 4$ days and water supply will last for $\frac{2}{1} = 2$ days, so in total he will be able to survive for $min(4, 2) = 2$ days and since required time to reach the shore is $1$ day, he will be able to reach there.

**TestCase 2:** Chef's food supply will last for $\frac{4}{1} = 4$ days and water supply will last for $\frac{2}{3} = 0.67$ days, so in total he will be able to survive for $min(4, 0.67) = 0.67$ days and since required time to reach the shore is $1$ day, he won't be able to reach there.

**TestCase 3:** Chef's food supply will last for $\frac{4}{4} = 1$ day and water supply will also last for $\frac{2}{2} = 1$ day, so in total he will be able to survive for $min(1, 1) = 1$ day and since required time to reach the shore is $2$ days, he won't be able to reach there.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>