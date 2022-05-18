<h1>Fase 0</h1>
<div class="container" style="text-align:center;">
	<p>
		Introduce los datos
		requeridos. Nota: X<sub>n</sub>&gt;=0
	</p>
	<div class="container" style="text-align:center;">
		<p>
		<form id="fsimplex" name="fsimplex" method="post" action="simplex.php" style="text-align:center;">
			<table>
				<tbody>
					<tr>
						<td class="des" style="text-align:center;">
							<label for="ncol">
								Numero de Variables:
							</label>
						</td>
						<td>
							<input type="text" size="2" maxlength="3" id="nvar" name="nvar" />
						</td>
					</tr>
					<tr>
						<td class="des">
							<label for="nrow">
								Numero de Restricciones:
							</label>
						<td>
							<input type="text" size="2" maxlength="3" id="nres" name="nres" />
						</td>
						</td>
					</tr>
					<tr>
						<td class="des">
							<label for="objetivo">
								Objetivo:
							</label>
						</td>
						<td>
							<select id="objetivo" name="objetivo">
								<option value="0">Max</option>
								<option value="1">Min</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="des">
							<input type="hidden" name="phase" value="1">
						</td>
						<td>
							<input type="submit" value=">>>">
						</td>
					</tr>
				</tbody>
			</table>
		</form>
		</p>
	</div>

</div>