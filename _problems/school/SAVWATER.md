---
{"category_name":"school","problem_code":"SAVWATER","problem_name":"A - Save Water Save Life","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"12-04-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"math","3":"spyb2021"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SAVWATER","time":{"view_start_date":1618509602,"submit_start_date":1618509602,"visible_start_date":1618509602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SAVWATER","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
To address the situation of Water Scarcity in Chefland, Chef has started an awareness campaign to motivate people to use greywater for toilets, washing cars, gardening, and many other chores which don't require the use of freshwater. These activities presently consume $y$ liters of water every week per household and Chef thinks through this campaign he can help cut down the total usage to $\lfloor \frac{y}{2} \rfloor$.

Assuming $x$ liters of water every week per household is consumed at chores where using freshwater is mandatory and a total of $C$ liters of water is available for the entire Chefland having $H$ households for a week, find whether all the households can now have sufficient water to meet their requirements.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of a single line of input, four integers $H, x, y, C$. 

###Output:
Print a single line containing the string `"YES"` if it is possible to meet the requirement of all the households in Chefland or `"NO"` if it is impossible (without quotes).

You may print each character of each string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

###Constraints 
- $1 \leq T \leq 300$
- $1 \leq H, x, y \leq 10$
- $1 \leq C \leq 100$

###Sample Input:
```
3
3 1 1 3
1 1 1 2
2 1 1 1
```

###Sample Output:
```
YES
YES
NO
```

###Explanation:
**TestCase 1:** 
Total consumption of a single household after using greywater = $1 +$ $\lfloor \frac{1}{2} \rfloor$ = $1 + 0$ = $1$ liter.

Total consumption of three households after using greywater = $3 * 1 = 3$ liters which is equal to the available quantity of water.

**TestCase 2:** 
Total consumption of a single household after using greywater = $1 +$ $\lfloor \frac{1}{2} \rfloor$ = $1 + 0$ = $1$ liter which is less than the available quantity of water.

**TestCase 3:** 
Total consumption of a single household after using greywater = $1 +$ $\lfloor \frac{1}{2} \rfloor$ = $1 + 0$ = $1$ liter.

Total consumption of two households after using greywater = $2 * 1 = 2$ liters which is more than the available quantity of water.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>