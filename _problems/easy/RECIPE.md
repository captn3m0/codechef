---
{"languages_supported":{"0":"NA"},"title":"RECIPE","category":"NA","old_version":true,"problem_code":"RECIPE","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>The chef has a recipe he wishes to use for his guests,
but the recipe will make far more food than he can serve to the guests.
The chef therefore would like to make a reduced version of the recipe which has the same ratios of ingredients, but makes less food.
The chef, however, does not like fractions.
The original recipe contains only whole numbers of ingredients,
and the chef wants the reduced recipe to only contain whole numbers of ingredients as well.
Help the chef determine how much of each ingredient to use in order to make as little food as possible.</p>

<h3>Input</h3>
<p>Input will begin with an integer T, the number of test cases.
Each test case consists of a single line.
The line begins with a positive integer N, the number of ingredients.
N integers follow, each indicating the quantity of a particular ingredient that is used.</p>

<h3>Output</h3>
<p>For each test case, output exactly N space-separated integers on a line,
giving the quantity of each ingredient that the chef should use in order to make as little food as possible.</p>

<h3>Sample Input</h3>
<pre>3
2 4 4
3 2 3 4
4 3 15 9 6
</pre>

<h3>Sample Output</h3>
<pre>1 1
2 3 4
1 5 3 2
</pre>

<h3>Constraints</h3>
T&le;100<br />
2&le;N&le;50<br />
All ingredient quantities are between 1 and 1000, inclusive.    