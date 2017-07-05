<div class="dashboardPageTitle text-center">
    <h2>Nova Ficha</h2>
</div>
<div class="dashboardBoxBg mb30">
    <div class="profileIntro paraMargin">
        <h3>Ficha de notificação de infecção de sítio cirúrgico CCIH/SASMC</h3>
        <p>Os campos em negrito são obrigatórios</p>
        <div class="row">


            <div class="{{ $errors->has('nome') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Nome do paciênte</label>
                    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('nome'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nome') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('registro') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Registro do paciente</label>
                    {!! Form::text('registro', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('registro'))
                        <span class="help-block">
                            <strong>{{ $errors->first('registro') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('diagnostico_inicial') ? ' has-error' : '' }}">
                <div class="form-group col-sm-12 col-xs-12">
                    <label for="listingTitle">Diagnóstico Inicial</label>
                    {!! Form::textarea('diagnostico_inicial', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('diagnostico_inicial'))
                        <span class="help-block">
                            <strong>{{ $errors->first('diagnostico_inicial') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('data_admissao') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Data de Admissão</label>
                    {!! Form::text('data_admissao', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('data_admissao'))
                        <span class="help-block">
                            <strong>{{ $errors->first('data_admissao') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('sexo') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Sexo</label>
                    {!! Form::select('sexo',  array(''=>'Escolha o sexo', 'F' => 'Feminino', 'M' => 'Masculino'), null, ['class'=>'form-control']) !!}
                    @if ($errors->has('sexo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('sexo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('idade') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Idade</label>
                    {!! Form::text('idade', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('idade'))
                        <span class="help-block">
                            <strong>{{ $errors->first('idade') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('leito') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Leito</label>
                    {!! Form::text('leito', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('leito'))
                        <span class="help-block">
                            <strong>{{ $errors->first('leito') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('condicao_risco') ? ' has-error' : '' }}">
                <div class="form-group col-sm-12 col-xs-12">
                    <label for="listingTitle">Condição de Risco</label>
                    {!! Form::textarea('condicao_risco', null, ['class' => 'form-control']) !!}
                    <span class="help-block"><font color="black">Diabetes, Câncer, Colagenoses, Defic. Imunológica, Obsidade ou outra</font></span>
                    @if ($errors->has('condicao_risco'))
                        <span class="help-block">
                            <strong>{{ $errors->first('condicao_risco') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>

<div class="dashboardBoxBg mb30">
    <div class="profileIntro paraMargin">
        <h3>Dados da Cirurgia</h3>

        <div class="row">

            <div class="{{ $errors->has('terminologia') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Terminologia</label>
                    {!! Form::text('terminologia', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('terminologia'))
                        <span class="help-block">
                            <strong>{{ $errors->first('terminologia') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('data') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Data</label>
                    {!! Form::text('data', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('data'))
                        <span class="help-block">
                            <strong>{{ $errors->first('data') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('inicio') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Início</label>
                    {!! Form::text('inicio', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('inicio'))
                        <span class="help-block">
                            <strong>{{ $errors->first('inicio') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('fim') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                <label for="listingTitle">Fim</label>
                    {!! Form::text('fim', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('fim'))
                        <span class="help-block">
                            <strong>{{ $errors->first('fim') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('ducacao') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Duração</label>
                    {!! Form::text('ducacao', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('ducacao'))
                        <span class="help-block">
                            <strong>{{ $errors->first('ducacao') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('classificacao') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Classificação</label>
                    {!! Form::select('classificacao',
                    array(''=>'Escolha uma opção', 'Limpa' => 'Limpa', 'Potencialmente Contaminada' => 'Potencialmente Contaminada', 'Contaminada' => 'Contaminada', 'Infectada'=>'Infectada'),
                    null, ['class'=>'form-control']) !!}
                    @if ($errors->has('classificacao'))
                        <span class="help-block">
                            <strong>{{ $errors->first('classificacao') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('emergencia') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Cirurgia de Emergencia?</label>
                    {!! Form::select('emergencia',  array(''=>'Escolha o valor', 'Sim' => 'Sim', 'Não' => 'Não'), null, ['class'=>'form-control']) !!}
                    @if ($errors->has('emergencia'))
                        <span class="help-block">
                            <strong>{{ $errors->first('emergencia') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('motivo') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Motivo</label>
                    {!! Form::text('motivo', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('motivo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('motivo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('tricotomia') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Tricotomia</label>
                    {!! Form::select('tricotomia',  array(''=>'Escolha uma opção', 'S' => 'Sim', 'N' => 'Não'), null, ['class'=>'form-control']) !!}
                    @if ($errors->has('tricotomia'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tricotomia') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('tricotomia_data_hora') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Data e Hora</label>
                    {!! Form::text('tricotomia_data_hora', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('tricotomia_data_hora'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tricotomia_data_hora') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('transfusao_sanguinea') ? ' has-error' : '' }}">
                <div class="form-group col-sm-12 col-xs-12">
                    <label for="listingTitle">Transfusão Sanguínea</label>
                    {!! Form::select('transfusao_sanguinea',  array(''=>'Escolha uma opção', 'S' => 'Sim', 'N' => 'Não'), null, ['class'=>'form-control']) !!}
                    @if ($errors->has('transfusao_sanguinea'))
                        <span class="help-block">
                            <strong>{{ $errors->first('transfusao_sanguinea') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('cirurgiao') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Cirurgião</label>
                    {!! Form::text('cirurgiao', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('cirurgiao'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cirurgiao') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('instrumentador') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Instrumentador</label>
                    {!! Form::text('instrumentador', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('instrumentador'))
                        <span class="help-block">
                            <strong>{{ $errors->first('instrumentador') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('anestesista') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Anestesista</label>
                    {!! Form::text('anestesista', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('anestesista'))
                        <span class="help-block">
                            <strong>{{ $errors->first('anestesista') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('auxiliar_cirurgia') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Auxiliar de Cirurgia</label>
                    {!! Form::text('auxiliar_cirurgia', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('auxiliar_cirurgia'))
                        <span class="help-block">
                            <strong>{{ $errors->first('auxiliar_cirurgia') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('cirtulantes') ? ' has-error' : '' }}">
                <div class="form-group col-sm-12 col-xs-12">
                    <label for="listingTitle">Circulantes</label>
                    {!! Form::textarea('cirtulantes', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('cirtulantes'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cirtulantes') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('anestesia') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Tipo de Anestesia</label>
                    {!! Form::text('anestesia', null, ['class' => 'form-control']) !!}
                    <span class="help-block"><font color="black">Geral, Raqui, PEridual ou outra</font></span>
                @if ($errors->has('anestesia'))
                        <span class="help-block">
                            <strong>{{ $errors->first('anestesia') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('antimicrobiano') ? ' has-error' : '' }}">
                <div class="form-group col-sm-6 col-xs-12">
                    <label for="listingTitle">Antimicrobiano</label>
                    {!! Form::select('antimicrobiano',  array(''=>'Escolha uma opção', 'Profilaxia' => 'Profilaxia', 'Tratamento' => 'Tratamento'), null, ['class'=>'form-control']) !!}
                    @if ($errors->has('antimicrobiano'))
                        <span class="help-block">
                            <strong>{{ $errors->first('antimicrobiano') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>

<div class="form-footer text-center">
    {!! Form::button($submitname, ['class' => 'btn btn-submit', 'type'=>'submit']) !!}
</div>